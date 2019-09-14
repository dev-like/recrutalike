<?php
namespace App\Providers;
use App\User;

use App\Models\Noticia;
use App\Models\Empresa;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);

        //Tabela da Empresa
        Empresa::saved(function ($dados) {
            DB::table('logs')->insert([
                'user' => \Auth::user()->nome,
                'descricao' => $dados,
                'acoes' => 'Editou as informações da Empresa',
                'date' => $dados->updated_at
            ]);
        });
        //Tabela de Notícias
        Noticia::saved(function ($dados) {
          $msg = ($dados->created_at == $dados->updated_at) ? 'Adicionou' : 'Editou';
          $date = ($dados->created_at == $dados->updated_at) ? $dados->created_at : $dados->updated_at;
              DB::table('logs')->insert([
                  'user' => \Auth::user()->nome,
                  'descricao' => $dados,
                  'acoes' =>$msg.' a notícia "'.$dados->titulo.'"',
                  'date' => $date
              ]);
          });

        Noticia::deleted(function ($dados) {
            DB::table('logs')->insert([
                'user' => \Auth::user()->nome,
                'descricao' => $dados,
                'acoes' => 'Deletou a notícia "'.$dados->titulo.'"',
                'date' => $dados->deleted_at
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
