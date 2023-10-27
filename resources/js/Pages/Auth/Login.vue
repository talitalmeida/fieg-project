<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { LockClosedIcon, EnvelopeIcon } from '@heroicons/vue/24/solid';
defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <h1 class="flex justify-center title font-bold">Entrar</h1>
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <div class="relative mb-6 ">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                        <LockClosedIcon class="h-6 w-6 text-gray-500" />
                    </div>
                    <input required autocomplete="current-email"
                           v-model="form.email" type="email"
                           id="email"
                           class=" bg-text-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email">
                </div>

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <div class="relative mb-6 ">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                        <EnvelopeIcon class="h-6 w-6 text-gray-500" />
                    </div>
                    <input required autocomplete="current-password"
                           v-model="form.password" type="password"
                           id="password"
                           class=" bg-text-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Senha">
                </div>

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Lembrar de mim</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Esqueci minha senha
                </Link>

                <PrimaryButton class="ml-4 btn_enter" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Entrar
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

<style scoped>
.bg-text-input{
    background-color: transparent;
//border-radius: 10px;
//border: 2px solid rgba(0, 0, 0, 0.10);
}
.title{
    padding: 50px 0;
    color: var(--colo-text);
    font-family: Montserrat,serif;
    font-size: 40px;
    font-style: normal;
    line-height: normal;
}

.btn_enter{
    padding: 15px 30px;
    max-width: 210px;
    max-height: 51px;
    flex-shrink: 0;
    font-size: 18px;
    border-radius: 18px;
    background: #006CB5;
}
</style>
