<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use UxWeb\SweetAlert\SweetAlert;

class SweetAlertDemo extends Controller
{
    public function index($alertType = null){

        /*switch ($alertType) {
            case 'info':
                //dd('info');
                SweetAlert::info('Welcome', 'Demo info alert');
                break;

            case 'success':
                SweetAlert::success('Welcome', 'Demo success alert');
                break;

            case 'error':
                SweetAlert::error('Welcome', 'Demo error alert');
                break;

            case 'warning':
                SweetAlert::warning('Welcome', 'Demo warning alert');
                break;

            case 'success_autoclose':
                SweetAlert::success('Welcome', 'Demo success alert')->autoclose(3500);
                break;

            case 'confirmation':
                SweetAlert::success('Welcome', 'Demo success alert')->persistent("Ok");;
                break;

            default:
                SweetAlert::message('Robots are working!');
                break;
        }*/

        SweetAlert::message('Robots are working!');

        return view('SweetAlertDemo');
    }

}
