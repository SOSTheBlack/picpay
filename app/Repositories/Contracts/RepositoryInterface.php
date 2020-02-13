<?php

namespace App\Repositories\Contracts;

use App\Exceptions\Repositories\RepositoryException;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface RepositoryInterface.
 *
 * @package App\Repositories\Contracts
 */
interface RepositoryInterface
{
    /**
     * Get the fillable attributes for the model.
     *
     * @return array
     */
    public function getFillable(): array;

    /**
     * Retrieve all data of repository
     *
     * @param array $columns
     *
     * @return mixed
     */
    public function all($columns = ['*']);

    /**
     * Find data by id
     *
     * @param       $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find($id, $columns = ['*']);

    /**
     * Save a new entity in repository
     *
     * @param array $attributes
     *
     * @throws RepositoryException
     *
     * @return mixed
     */
    public function create(array $attributes): Model;
}
