<?php
declare(strict_types=1);

namespace Hitrov\Test;


use Hitrov\Test\Traits\LoadEnv;

class OciApiWithEnvFileTest extends OciApiTest
{
    use LoadEnv;

    const ENV_FILENAME = '.env.test';

    public function testGetAvailabilityDomains(): void
    {
        $this->markTestSkipped('Not relevant.');
    }

    protected function setEnv(): void
    {
        
    }
}
