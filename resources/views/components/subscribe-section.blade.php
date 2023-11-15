<section class="pt-10">
    <div class="container">
        <div class="w-full md:w-7/12 mx-auto">
            <h2 class="text-center mb-7">Suscríbete</h2>
            <p class="text-center">Regístrate con tu correo electrónico para recibir información de IP Media River</p>
            <form action="{{ route('suscribe') }}" class="flex flex-col md:flex-row items-center md:space-x-2 mt-10 space-y-3 md:space-y-0" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Correo electrónico" class="form-control">
                <button class="btn btn-primary-outline w-full md:w-auto">
                    Suscribirme
                </button>
            </form>
            @error('email')
            <p class="text-red-500 text-xs font-bold mt-5 italic text-center">{{ $message }}</p>
            @enderror
        </div>
    </div>
</section>