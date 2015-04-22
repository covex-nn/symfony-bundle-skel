<?php

/**
 * Bundle test kernel
 *
 * @author Andrey F. Mindubaev <covex.mobile@gmail.com>
 * @license http://opensource.org/licenses/MIT  MIT License
 */
use Symfony\Component\Config\Loader\LoaderInterface;

/**
 * Bundle test kernel
 */
// @codingStandardsIgnoreStart
class AppKernel extends Apnet\FunctionalTestBundle\HttpKernel\AppKernel
// @codingStandardsIgnoreEnd
{

  /**
   * {@inheritdoc}
   */
  public function registerBundles()
  {
    return array(
      new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
      new Symfony\Bundle\TwigBundle\TwigBundle(),
      new Symfony\Bundle\MonologBundle\MonologBundle(),

      new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle(),
      new Apnet\FunctionalTestBundle\ApnetFunctionalTestBundle(),

      new Symfony\Bundle\AsseticBundle\AsseticBundle(),
      new Apnet\AsseticImporterBundle\ApnetAsseticImporterBundle(),
      new Apnet\LayoutBundle\ApnetLayoutBundle(),
      new Covex\TwigCallableBridgeBundle\CovexTwigCallableBridgeBundle(),
      new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function registerContainerConfiguration(LoaderInterface $loader)
  {
    $loader->load(__DIR__ . "/config/config.yml");
  }
}
