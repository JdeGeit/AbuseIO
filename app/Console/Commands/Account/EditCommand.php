<?php

namespace AbuseIO\Console\Commands\Account;

use AbuseIO\Console\Commands\AbstractEditCommand;
use AbuseIO\Models\Account;
use AbuseIO\Models\Brand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputDefinition;
use Validator;

class EditCommand extends AbstractEditCommand
{
    public function getOptionsList()
    {
        return new InputDefinition([
            new inputArgument('id', inputArgument::REQUIRED, 'Account id to edit'),
            new InputOption('name', null, InputOption::VALUE_OPTIONAL, 'account name'),
            new InputOption('brand_id', null, InputOption::VALUE_OPTIONAL,  'brand id'),
            new InputOption('disabled', null, InputOption::VALUE_OPTIONAL, 'true|false, Set the account to be enabled'),
        ]);
    }

    public function getAsNoun()
    {
        return 'account';
    }

    protected function getModelFromRequest()
    {
        return Account::find($this->argument('id'));
    }
    protected function handleOptions($model)
    {
        $this->updateFieldWithOption($model, 'name');

        if ($this->option('brand_id')) {
            if (null === Brand::find($this->option('brand_id'))) {
                $this->error('Unable to find brand with this criteria');

                return false;
            }
        }

        $this->updateFieldWithOption($model, 'brand_id');
        $this->updateBooleanFieldWithOption($model, 'disabled');

        return true;
    }

    protected function getValidator($model)
    {
        return Validator::make($model->toArray(), Account::updateRules($model));
    }
}
