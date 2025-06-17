<?php

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;

class TenantRequestListener
{
  public function onKernelRequest(RequestEvent $event): void
  {
    $request = $event->getRequest();

    // On récupère le premier segment de l'URL (le slug du tenant)
    $pathInfo = $request->getPathInfo();
    $segments = explode('/', trim($pathInfo, '/'));

    $tenantSlug = $segments[0] ?? null;

    // On enregistre le slug dans les attributs de la requête
    $request->attributes->set('tenant_slug', $tenantSlug);
  }
}
