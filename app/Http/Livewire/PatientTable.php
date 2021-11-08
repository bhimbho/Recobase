<?php


namespace App\Http\Livewire;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;


class PatientTable extends DataTableComponent
{
    public $refresh = 5000;

    public function columns(): array
    {
        return [
            Column::make('Firstname', 'firstname')
                ->sortable()
                ->searchable(),
            Column::make('Lastname', 'lastname')
                ->sortable()
                ->searchable(),
            Column::make('Othername', 'othername')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Mobile', 'mobile')
            ->sortable()
            ->searchable(),
            Column::make('Gender', 'gender.title')
            ->searchable(),
            Column::make('Created', 'created_at')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }

    public function bulkActions(): array
    {
        return [
            'deleteSelected'   => __('delete'),
        ];
    }

    /**
     * Method delete array of users
     * return void
     */
    public function deleteSelected()
    {
        Patient::whereIn('id', $this->selectedKeys())->delete();
    }

    public function getTableRowUrl($row): string
    {
        return route('record', $row);
    }

}
