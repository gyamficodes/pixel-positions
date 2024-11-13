<x-layout>
<page-heading>Register</page-heading>

<x-forms.form method="POST" action="/register" enctype="multipart/form-data">
    <x-forms.input  label=" Name" name="name" type="text"/>
    <x-forms.input  label="Email" name="email" type="email"/>
    <x-forms.input  label="Password" name="password" type="password"/>
    <x-forms.input  label="Password Confirmation" name="password_confirmation" type="password"/>

    <x-forms.divider/>

    <x-forms.input  label=" Employer Name" name="employer" type="text"/>
    <x-forms.input  label="Employer Logo" name="logo" type="file"/>

    <x-forms.button>Create Account</x-forms.button>
</x-form.form>
</x-layout>