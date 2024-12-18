<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class DashboardPms extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.dashboard-pms';

    protected static ?string $title = 'Dashboard PMS';

    protected static ?string $navigationLabel = 'Dashboard PMS';

    protected static ?string $navigationGroup = 'Report Dashboard';
}
