<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // عرض صفحة المستخدم
    public function showUserForm()
    {
        return view('user');
    }

    // معالجة البيانات المرسلة من النموذج
    public function submitForm(Request $request)
    {
        // استلام البيانات من النموذج
        $name = $request->input('name');
        $email = $request->input('email');

        // هنا يمكنك معالجة البيانات (مثل حفظها في قاعدة البيانات)

        // بعد المعالجة، إعادة توجيه المستخدم إلى صفحة "Ok"
        return redirect()->route('ok');
    }

    // عرض صفحة "Ok"
    public function showOkPage()
    {
        return view('ok');
    }
}
