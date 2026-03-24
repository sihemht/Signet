<?php

namespace App\Form;

use App\Entity\Books;
use Symfony\Component\Form\AbstractType;
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
                'attr'  => [
                    'placeholder' => 'Ex : Le Seigneur des Anneaux',
        ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le titre est obligatoire.',
                    ]),
                    new Length([
                        'max' => 255,
                        'maxMessage' => 'Le titre ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('saga', TextType::class, [
                'label'    => 'Saga / Série',
                'required' => false,
                'attr'     => ['placeholder' => 'Nom de la saga'],
            ])
            ->add('number', IntegerType::class, [
                'label'    => 'Tome n°',
                'required' => false,
                'attr'     => ['placeholder' => '1'],
            ])
            ->add('authorsText', TextType::class, [
                'label'    => 'Auteur(s)',
                'required' => false,
                'attr'     => ['placeholder' => 'J.R.R. Tolkien...'],
                'help'     => 'Séparez par une virgule',
            ])
            ->add('genresText', TextType::class, [
                'label'    => 'Genre(s)',
                'required' => false,
                'attr'     => ['placeholder' => 'Ex : Fantasy, Aventure'],
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
                'attr'     => ['placeholder' => 'Ex : 320', 'min' => 1],
                'constraints' => [
                    new Range(min: 1, minMessage: 'Le nombre de pages doit être supérieur à 0.'),
                ],
            ]);

        if ($options['update']) {
            $builder
                ->add('readingStatus', ChoiceType::class, [
                    'label'   => 'Statut de lecture',
                    'choices' => [
                        '📚 À lire'    => 'to_read',
                        '📖 En cours'  => 'reading',
                        '✅ Terminé'   => 'finished',
                        '❌ Abandonné' => 'abandoned',
                    ],
                ])
                ->add('rating', IntegerType::class, [
                    'label'    => 'Note (sur 5)',
                    'required' => false,
                    'attr'     => ['placeholder' => 'Entre 0 et 5', 'min' => 0, 'max' => 5],
                    'constraints' => [
                        new Range(
                            min: 0,
                            max: 5,
                            notInRangeMessage: 'La note doit être comprise entre {{ min }} et {{ max }}.',
                        ),
                    ],
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