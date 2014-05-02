learnsymfony
============

A collection of sample Symfony bundles for learning the framework fundamentals. 

First we need to register the bundle in AppKernel:

// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    // ...

    public function registerBundles()
    {
        $bundles = array(
            // ...,
            new Learn\FirstBundle\LearnFirstBundle(),
        );

        // ...
    }
}

