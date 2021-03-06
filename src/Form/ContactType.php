<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('prenom', TextType::class, [
				'label' => 'Votre prénom',
				'attr' => [
					'placeholder' => 'Merci de saisir votre prénom'
				]
			])
			->add('nom', TextType::class, [
				'label' => 'Votre nom',
				'attr' => [
					'placeholder' => 'Merci de saisir votre nom'
				]
			])
			->add('email', EmailType::class, [
				'label' => 'Votre Email',
				'attr' => [
					'placeholder' => 'Merci de saisir votre adresse mail'
				]
			])
			->add('content', TextareaType::class, [
				'label' => 'Votre message',
				'attr' => [
					'placeholder' => 'Message...'
				]
			])
			->add('submit', SubmitType::class, [
				'label' => 'Envoyer',
				'attr' => [
					'class' => 'btn-block btn-success bg-dark w-75 mx-auto'
				]
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			// Configure your form options here
		]);
	}
}