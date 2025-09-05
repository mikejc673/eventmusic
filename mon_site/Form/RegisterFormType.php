<php?

    class RegisterFormType extends AbstractType
    {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    $builder
    ->add('username')
    ->add('email')
    ->add('password')
    ->add('password_confirmation')
    ;
    }

    <h1> Register</h1>
    {{ form_errors(RegistrationForm) }}
    {{ form_widget(RegistrationForm) }}
    {{ form_username(RegistrationForm) }}
    {{ form_email(RegistrationForm) }}
    {{ form_password(RegistrationForm) }}
    {{ form_password_confirmation(RegistrationForm) }}
    <button type="submit">Register</button>
</php?