<div>
    <form wire:submit.prevent='submit' class="flex flex-col">
        <div class="flex items-center gap-2">
            <h2>Source</h2>
            <x-forms.button type="submit">Save</x-forms.button>
            <a target="_blank" class="hover:no-underline" href="{{ $application?->gitBranchLocation }}">
                <x-forms.button>
                    Open Repository
                    <x-external-link />
                </x-forms.button>
            </a>
            @if (!$application->source->is_public)
                <a target="_blank" class="hover:no-underline" href="{{ get_installation_path($application->source) }}">
                    <x-forms.button>
                        Open Git App
                        <x-external-link />
                    </x-forms.button>
                </a>
            @endif
            <a target="_blank" class="flex hover:no-underline" href="{{ $application?->gitCommits }}">
                <x-forms.button>Open Commits on Git
                    <x-external-link />
                </x-forms.button>
            </a>
        </div>
        <div class="pb-4">Code source of your application.</div>

        <div class="flex gap-2">
            <x-forms.input placeholder="coollabsio/coolify-example" id="application.git_repository"
                label="Repository" />
            <x-forms.input placeholder="main" id="application.git_branch" label="Branch" />
        </div>
        <div class="flex items-end gap-2">
            <x-forms.input placeholder="HEAD" id="application.git_commit_sha" placeholder="HEAD" label="Commit SHA" />

        </div>

        @if ($application->private_key_id)
            <h4 class="py-2 pt-4">Current Deploy Key: <span
                    class="text-warning">{{ $application->private_key->name }}</span></h4>

            <div class="py-2 ">Select another Deploy Key</div>
            <div class="flex gap-2">
                @foreach ($private_keys as $key)
                    <x-forms.button wire:click.defer="setPrivateKey('{{ $key->id }}')">{{ $key->name }}
                    </x-forms.button>
                @endforeach
            </div>
        @endif
    </form>
</div>
