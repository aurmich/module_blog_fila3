<?php

declare(strict_types=1);

namespace Modules\User\Console\Commands;

use Modules\Xot\Datas\XotData;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;


class CreateTenantCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:tenant-create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a tenant';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $modelClass=XotData::make()->getTenantClass();

        $name = text(
            label: 'What is name of tenant?',
            placeholder: 'E.g. Tabacchi belli',
            //default: $user?->name,
            //hint: 'This will be displayed on your profile.'
        );

        $modelClass::create([
            'name'=>$name,
        ]);


        $map = function ($row) {
            $result = $row->toArray();

            // $result['price'] = Money::toString($result['price']);

            return $result;
        };

        $rows = $modelClass::get()->map($map);

        if (\count($rows) > 0) {
            $headers = array_keys($rows[0]);

            $this->newLine();
            $this->table($headers, $rows);
            $this->newLine();
        } else {
            $this->newLine();
            $this->warn('⚡ No Tenants ['.$modelClass.']');
            $this->newLine();
        }
    }
}
