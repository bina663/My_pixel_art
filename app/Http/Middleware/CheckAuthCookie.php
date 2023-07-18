namespace App\Http\Middleware;

use Closure;

class CheckAuthCookie
{
    public function handle($request, Closure $next)
    {
        // Lógica do middleware
        
        return $next($request);
    }
}
