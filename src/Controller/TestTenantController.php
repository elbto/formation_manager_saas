<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class TestTenantController
{
  #[Route('/{slug}/test', name: 'tenant_test')]
  public function index(Request $request): Response
  {
    $tenant = $request->attributes->get('tenant_slug');

    return new Response("Slug détecté : " . $tenant);
  }
}
