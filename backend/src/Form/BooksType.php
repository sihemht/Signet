<?php

namespace App\Form;

use App\Entity\Books;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer; // <--- NE PAS OUBLIER
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class BooksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre du livre',
                'attr'  => ['placeholder' => 'Ex : Le Seigneur des Anneaux'],
                'constraints' => [
                    new NotBlank(['message' => 'Le titre est obligatoire.']),
                    new Length(['max' => 255]),
                ],
            ])
            ->add('saga', TextType::class, [
                'label'    => 'Saga / Série',
                'required' => false,
            ])
            ->add('number', IntegerType::class, [
                'label'    => 'Tome n°',
                'required' => false,
            ])
            ->add('authors', TextType::class, [
                'label'    => 'Auteur(s)',
                'required' => false,
                'help'     => 'Séparez par une virgule',
            ])
            ->add('genres', TextType::class, [
                'label'    => 'Genre(s)',
                'required' => false,
                'help'     => 'Séparez plusieurs genres par une virgule.',
            ])
            ->add('month_of_purchase', DateType::class, [
                'widget'   => 'single_text',
                'required' => false,
                'label'    => 'Date d\'achat',
            ])
            ->add('number_of_page', IntegerType::class, [
                'label'    => 'Nombre de pages',
                'required' => false,
                'constraints' => [
                    new Range(min: 1),
                ],
            ]);

        // --- TRANSFORMERS ---
        // Transformer pour Authors
        $builder->get('authors')->addModelTransformer(new CallbackTransformer(
            fn ($authorsAsArray) => is_array($authorsAsArray) ? implode(', ', $authorsAsArray) : '',
            fn ($authorsAsString) => $authorsAsString ? array_map('trim', explode(',', (string)$authorsAsString)) : []
        ));

        // Transformer pour Genres
        $builder->get('genres')->addModelTransformer(new CallbackTransformer(
            fn ($genresAsArray) => is_array($genresAsArray) ? implode(', ', $genresAsArray) : '',
            fn ($genresAsString) => $genresAsString ? array_map('trim', explode(',', (string)$genresAsString)) : []
        ));

        if ($options['update']) {
            $builder
                ->add('readingStatus', ChoiceType::class, [
                    'choices' => [
                        '📚 À lire'    => 'to_read',
                        '📖 En cours'  => 'reading',
                        '✅ Terminé'   => 'finished',
                        '❌ Abandonné' => 'abandoned',
                    ],
                ])
                ->add('rating', IntegerType::class, [
                    'constraints' => [new Range(min: 0, max: 5)],
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Books::class,
            'update'     => false,
        ]);
    }
}
