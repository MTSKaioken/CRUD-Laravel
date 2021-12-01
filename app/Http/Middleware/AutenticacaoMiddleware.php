<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao)
    {
        // Verifica se o usuário possui acesso a rota]
        echo $metodo_autenticacao;
        if (false){
            return $next($request);
        }
        else{
            return Response('Acesso Negado! Rota exige autenticação!!!');
        }
    }
}
