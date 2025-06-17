<?php

namespace App\Tenant;

class TenantContext
{
  private ?string $tenantSlug = null;

  public function setTenantSlug(string $slug): void
  {
    $this->tenantSlug = $slug;
  }

  public function getTenantSlug(): ?string
  {
    return $this->tenantSlug;
  }
}
