<div x-data="{ showEditModal: false }" @close-modal.window="showEditModal = false">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <input type="search" class="form-control" wire:model.live="search" placeholder="{{ __('views.search') }}...">
        </div>
        {{-- <div class="header-title">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                {{ __('views.add_user') }}
            </button>
        </div> --}}
    </div>
    <div class="card-body p-0">
        <div class="table-responsive mt-4">
            <table id="basic-table" class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>{{ __('views.name') }}</th>
                        <th>{{ __('views.countries') }}</th>
                        <th>{{ __('views.ref_name') }}</th>
                        <th>{{ __('views.email') }}</th>
                        <th>{{ __('views.phone_number') }}</th>
                        <th>{{ __('views.permissions') }}</th>
                        <th>{{ __('views.last_login') }}</th>
                        <th>{{ __('views.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        @if (in_array($user->role->key, ['vendor']))
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6>{{ $user->name }}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6>{{ $user->country->name }}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6>{{ $user->reference_name  ?? $user->referrals_count  }}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6>{{ $user->email }}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6>{{ $user->mobile }}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6>{{ $user->role->name }}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6>{{ $user->last_seen  ? \Carbon\Carbon::parse($user->last_seen)->diffForHumans()  : __('views.login_failed') }}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        @can('update', $user)
                                            <button type="button" class="btn btn-sm btn-icon btn-warning" data-bs-toggle="modal" data-bs-target="#editUserModal" wire:click="edit({{ $user->id }})">
                                                <span class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>
                                        @endcan
                                        <button type="button" class="btn btn-sm btn-icon btn-danger" wire:click="delete({{ $user->id }})" wire:confirm="{{ __('views.confirm_delete') }}">
                                            <span class="btn-inner">
                                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                    <path
                                                        d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                        d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">{{ __('views.no_users_found') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $users->links() }}
        </div>
    </div>

    <!-- Add User Modal -->
    <x-model-component model="addUserModal" title="{{ __('views.add_user') }}" submitName="{{ __('views.save') }}">
        <livewire:dashboards.stores.users.user-form />
    </x-model-component>

    <!-- Edit User Modal -->
    <x-model-component model="editUserModal" title="{{ __('views.edit_user') }}" submitName="{{ __('views.save') }}">
        @if ($selectedUser)
            <livewire:dashboards.stores.users.user-form :user="$selectedUser" wire:key="{{ $selectedUser->id }}" />
        @endif
    </x-model-component>
</div>

@script
    <script>
        Alpine.data('showEditModal', () => ({
            init() {
                this.$watch('showEditModal', value => {
                    if (value) {
                        $('#editUserModal').modal('show');
                    } else {
                        $('#editUserModal').modal('hide');
                    }
                });
            }
        }));

        Livewire.on('open-modal', (modalId) => {
            $('#' + modalId).modal('show');
        });

        Livewire.on('close-modal', () => {
            $('#addUserModal').modal('hide');
            $('#editUserModal').modal('hide');
        });

        $(document).ready(function() {
            $('#addUserModal, #editUserModal').on('hidden.bs.modal', function () {
                Livewire.dispatch('reset-form');
            });
        });
    </script>
@endscript
