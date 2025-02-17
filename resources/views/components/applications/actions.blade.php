<div class="flex items-center gap-2">
    <div class="group">
        <label tabindex="0" class="flex items-center gap-2 cursor-pointer hover:text-white"> Actions
            <x-chevron-down />
        </label>
        <div class="absolute hidden group-hover:block ">
            <ul tabindex="0"
                class="relative text-xs text-white normal-case rounded -ml-44 min-w-max menu bg-coolgray-200">
                @if ($application->status === 'running')
                    <li>
                        <div class="rounded-none hover:bg-coollabs hover:text-white" wire:click='deploy'><svg
                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                <path d="M12 9l0 3" />
                                <path d="M12 15l.01 0" />
                            </svg>Restart</div>
                    </li>
                    <li>
                        <div class="rounded-none hover:bg-coollabs hover:text-white"
                            wire:click='force_deploy_without_cache'><svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12.983 8.978c3.955 -.182 7.017 -1.446 7.017 -2.978c0 -1.657 -3.582 -3 -8 -3c-1.661 0 -3.204 .19 -4.483 .515m-2.783 1.228c-.471 .382 -.734 .808 -.734 1.257c0 1.22 1.944 2.271 4.734 2.74" />
                                <path
                                    d="M4 6v6c0 1.657 3.582 3 8 3c.986 0 1.93 -.067 2.802 -.19m3.187 -.82c1.251 -.53 2.011 -1.228 2.011 -1.99v-6" />
                                <path d="M4 12v6c0 1.657 3.582 3 8 3c3.217 0 5.991 -.712 7.261 -1.74m.739 -3.26v-4" />
                                <path d="M3 3l18 18" />
                            </svg>Force deploy (without
                            cache)
                        </div>
                    </li>
                    <li>
                        <div class="rounded-none hover:bg-red-500 hover:text-white" wire:click='stop'><svg
                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 13v-7.5a1.5 1.5 0 0 1 3 0v6.5" />
                                <path d="M11 5.5v-2a1.5 1.5 0 1 1 3 0v8.5" />
                                <path d="M14 5.5a1.5 1.5 0 0 1 3 0v6.5" />
                                <path
                                    d="M17 7.5a1.5 1.5 0 0 1 3 0v8.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7a69.74 69.74 0 0 1 -.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47" />
                            </svg>Stop</div>
                    </li>
                @else
                    <li>
                        <div class="rounded-none hover:bg-coollabs hover:text-white" wire:click='deploy'><svg
                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 4v16l13 -8z" />
                            </svg>Deploy</div>
                    </li>
                    <li>
                    </li>
                    <li>
                        <div class="rounded-none hover:bg-coollabs hover:text-white" wire:click='deploy(true)'><svg
                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12.983 8.978c3.955 -.182 7.017 -1.446 7.017 -2.978c0 -1.657 -3.582 -3 -8 -3c-1.661 0 -3.204 .19 -4.483 .515m-2.783 1.228c-.471 .382 -.734 .808 -.734 1.257c0 1.22 1.944 2.271 4.734 2.74" />
                                <path
                                    d="M4 6v6c0 1.657 3.582 3 8 3c.986 0 1.93 -.067 2.802 -.19m3.187 -.82c1.251 -.53 2.011 -1.228 2.011 -1.99v-6" />
                                <path d="M4 12v6c0 1.657 3.582 3 8 3c3.217 0 5.991 -.712 7.261 -1.74m.739 -3.26v-4" />
                                <path d="M3 3l18 18" />
                            </svg>Force deploy (without
                            cache)
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
