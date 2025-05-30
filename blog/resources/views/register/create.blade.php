<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">Add commentMore actions
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register!</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf

                    <x-form.input name="name"/>
                    <x-form.input name="username"/>
                    <x-form.input name="email" type="email"/>
                    <x-form.input name="password" type="password" autocomplete="new-password"/>
                    <x-form.button>Sign Up</x-form.button>
                </form>
                Add commentMore actions
            </x-panel>
        </main>
    </section>
</x-layout>
