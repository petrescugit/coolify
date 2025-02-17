<?php

namespace App\Http\Livewire\Project\Application\Storages;

use Livewire\Component;

class Add extends Component
{
    public $parameters;
    public string $name;
    public string $mount_path;
    public string|null $host_path = null;

    protected $listeners = ['clearAddStorage' => 'clear'];
    protected $rules = [
        'name' => 'required|string',
        'mount_path' => 'required|string',
        'host_path' => 'string|nullable',
    ];
    protected $validationAttributes = [
        'name' => 'name',
        'mount_path' => 'mount',
        'host_path' => 'host',
    ];
    public function mount()
    {
        $this->parameters = getRouteParameters();
    }
    public function submit()
    {
        $this->validate();
        $this->emitUp('submit', [
            'name' => $this->name,
            'mount_path' => $this->mount_path,
            'host_path' => $this->host_path,
        ]);
    }
    public function clear()
    {
        $this->name = '';
        $this->mount_path = '';
        $this->host_path = null;
    }
}
