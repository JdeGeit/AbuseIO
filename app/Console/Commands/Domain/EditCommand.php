<?php

namespace AbuseIO\Console\Commands\Domain;

use AbuseIO\Console\Commands\AbstractEditCommand;
use AbuseIO\Models\Contact;
use AbuseIO\Models\Domain;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputDefinition;
use Validator;

class EditCommand extends AbstractEditCommand
{
    public function getOptionsList()
    {
        return new InputDefinition([
            new inputArgument('id', InputArgument::REQUIRED, 'Account id to edit'),
            new InputOption('contact_id', null, InputOption::VALUE_OPTIONAL, 'Contact id for domain'),
            new InputOption('name', null, InputOption::VALUE_OPTIONAL,  'Name'),
            new InputOption('enabled', null, InputOption::VALUE_OPTIONAL, 'true|false, Set the domain to be enabled'),
        ]);
    }

    public function getAsNoun()
    {
        return 'domain';
    }

    protected function getModelFromRequest()
    {
        return Domain::find($this->argument('id'));
    }

    /**
     * @param $model
     *
     * @return bool
     */
    protected function handleOptions($model)
    {
        $this->updateFieldWithOption($model, 'name');

        if ($this->option('contact_id')) {
            if (null === Contact::find($this->option('contact_id'))) {
                $this->error('Unable to find contact with this criteria');

                return false;
            }
        }
        $this->updateFieldWithOption($model, 'contact_id');

        $this->updateBooleanFieldWithOption($model, 'enabled');

        return true;
    }

    protected function getValidator($model)
    {
        if (null !== $model) {
            return Validator::make($model->toArray(), Domain::updateRules($model));
        }
    }
}
