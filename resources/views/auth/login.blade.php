<x-layout>
    <page-heading>Login</page-heading>
    
    <x-forms.form method="POST" action="/login">
        <x-forms.input  label=" Name" name="name" type="text"/>
        <x-forms.input  label="Email" name="email" type="email"/>
       
    
    
        <x-forms.button>Log In</x-forms.button>
    </x-form.form>
    </x-layout>