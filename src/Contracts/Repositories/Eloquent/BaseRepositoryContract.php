<?php

namespace IndieHD\Velkart\Contracts\Repositories\Eloquent;

interface BaseRepositoryContract extends FactoryProvider
{
    public function list(string $order = 'id', string $sort = 'desc', array $columns = ['*']): iterable;

    public function create(array $attributes): object;

    public function update(int $id, array $attributes): bool;

    public function delete(int $id): bool;

    public function findById(int $id): object;
}
