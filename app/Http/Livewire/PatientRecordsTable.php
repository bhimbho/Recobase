<?php

namespace App\Http\Livewire;

use App\Models\PatientRecord;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PatientRecordsTable extends DataTableComponent
{
    public $refresh = 5000;

    public function columns(): array
    {
        return [
            Column::make('Readings (mm Hg)', 'pressure')
                ->sortable()
                ->searchable(),
            Column::make('Patient Name', 'patient.full_name')
                ->sortable()
                ->searchable(),
            Column::make('Patient Name', 'patient.email')
                ->sortable()
                ->searchable(),
            Column::make('Patient Name', 'patient.mobile')
                ->sortable()
                ->searchable(),
            Column::make('Created', 'created_at')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return PatientRecord::query();
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
        PatientRecord::whereIn('id', $this->selectedKeys())->delete();
    }

    public function getTableRowUrl($row)
    {
        return route('record', $row);
    }

}
