<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Elimina Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Una volta eliminato il tuo account, tutte le risorse e i dati ad esso associati verranno eliminati permanentemente. Prima di eliminare il tuo account, assicurati di scaricare tutti i dati o le informazioni che desideri conservare.') }}
        </p>
    </header>

    <!-- Pulsante di attivazione del modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-account">
        {{__('Elimina Account')}}
    </button>

    <!-- Corpo del Modal -->
    <!-- se desideri chiudere cliccando al di fuori del modal, rimuovi l'attributo data-bs-backdrop="static" e data-bs-keyboard="false" -->
    <div class="modal fade" id="delete-account" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="delete-account" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-account">Elimina Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Sei sicuro di voler eliminare il tuo account?') }}
                    </h2>
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Una volta eliminato il tuo account, tutte le risorse e i dati ad esso associati verranno eliminati permanentemente. Per favore, inserisci la tua password per confermare l\'eliminazione permanente del tuo account.') }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')


                        <div class="input-group">

                            <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}" />

                            @error('password')
                            <span class="invalid-feedback mt-2" role="alert">
                                <strong>{{ $errors->userDeletion->first('password')}}</strong>
                            </span>
                            @enderror



                            <button type="submit" class="btn btn-danger">
                                {{ __('Elimina Account') }}
                            </button>
                            <!--  -->
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>
