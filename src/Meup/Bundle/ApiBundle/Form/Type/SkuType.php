<?php
/**
 * This file is part of the 1001 Pharmacies kali-server
 *
 * (c) 1001pharmacies <http://github.com/1001pharmacies/kali-server>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meup\Bundle\ApiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class SkuType
 *
 * @author Florian AJIR <florian@1001pharmacies.com>
 */
class SkuType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('project', 'text', array(
            'description' => 'Name of the application',
        ));
        $builder->add('entityType', 'text', array(
            'description' => 'Type of the entity to be skued',
            'property_path' => 'foreignType'
        ));
        $builder->add('entityId', 'text', array(
            'description' => 'Id of the entity to be skued',
            'property_path' => 'foreignId'
        ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'         => 'Meup\Bundle\ApiBundle\Model\Sku',
            'intention'          => 'sku',
            'translation_domain' => 'MeupSkuBundle'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sku';
    }
}