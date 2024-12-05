

        <main class="main-content  mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                           
                            </div>
                            <div
                                class="col-md-8 mx-auto">
                                <div class="card card-plain">
                                    <div class="card-header ">
                                        <h4 class="font-weight-bolder mx-auto">Inscription</h4>
                                        <p class="mb-0">Entrez votre nom, votre Email et votre mot de passe</p>
                                    </div>
                                    <div class="card-body">
                                        <form wire:submit ="store">

                                            <div class="input-group input-group-outline @if(strlen($name?? '') > 0) is-filled @endif">
                                                <label class="form-label">Nom</label>
                                                <input wire:model.live="name" type="text" class="form-control" 
                                                >
                                            </div>
                                            @error('name')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror

                                            <div class="input-group input-group-outline mt-3 @if(strlen($email ?? '') > 0) is-filled @endif">
                                                <label class="form-label">Email</label>
                                                <input wire:model.live="email" type="email"  class="form-control"
                                                     >
                                            </div>
                                            @error('email')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror

                                            <div class="input-group input-group-outline mt-3 @if(strlen($password ?? '') > 0) is-filled @endif">
                                                <label class="form-label">Mot de passe</label>
                                                <input wire:model.live="password" type="password" class="form-control" >
                                            </div>
                                            @error('password')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">S'inscrire
                                                    </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            Vous avez déjà un compte?
                                            <a href="{{ route('login') }}"
                                                class="text-primary text-gradient font-weight-bold">Se connecter</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>