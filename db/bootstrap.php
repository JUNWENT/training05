<?php
/**
 * ORM.
 *
 * @see http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/tutorials/getting-started.html
 * @see http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/basic-mapping.html
 */

require_once "vendor/autoload.php";

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, null, null, false);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
  'dbname' => 'orm',
  'user' => 'root',
  'password' => 'root',
  'host' => '127.0.0.1',
  'driver' => 'pdo_mysql'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

//$user = 'wangqi';
//if($user) {
//  $User = new User();
//  $User->setName($user);
//  $User->setPassword('abcd');
//  $entityManager->persist($User);
//  $entityManager->flush();
//  var_dump($User->getId());
//}

$Repository = $entityManager->getRepository('User');
var_dump(get_class_methods($Repository));


