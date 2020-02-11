<?php

namespace App\Repositories\Eloquent;

use App\Exceptions\Repositories\RepositoryException;
use App\Repositories\Contracts\RepositoryInterface;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Lumen\Application;

/**
 * Class BaseRepository
 *
 * @package App\Repositories\Eloquent
 */
abstract class BaseRepositoryEloquent implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @var Application
     */
    private $app;

    /**
     * Specify Model class name
     *
     * @return string
     */
    abstract public function model();

    /**
     * @throws RepositoryException
     */
    public function __construct()
    {
        $this->app = app();
        $this->makeModel();
    }

    /**
     * @return Model
     *
     * @throws RepositoryException
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    /**
     * @throws RepositoryException
     */
    public function resetModel()
    {
        $this->makeModel();
    }

    /**
     * Retrieve all data of repository
     *
     * @param array $columns
     *
     * @return mixed
     *
     * @throws RepositoryException
     */
    public function all($columns = ['*'])
    {
        return User::all();
        echo '<pre>';
        print_r($this->model);
        if ($this->model instanceof Builder) {
            $results = $this->model->get($columns);
        } else {
            $results = $this->model->all($columns);
        }

        $this->resetModel();

        return $results;
    }
}
