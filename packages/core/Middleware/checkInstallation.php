<?php

namespace Core\Middleware;

use Closure;
use DB;

class checkInstallation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next )
    {
        if(\AppHelper::isPackageInstalled('Installer') && !$this->alreadyInstalled()) {
            return redirect()->route('EJCInstaller::welcome');
        } 
        
        return $next($request);
    }

    /**
     * If application is already installed.
     *
     * @return bool
     */
    public function alreadyInstalled()
    {
        return file_exists(storage_path('installed'));
    }

    
}
