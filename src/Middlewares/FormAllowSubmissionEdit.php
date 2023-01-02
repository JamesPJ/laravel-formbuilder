<?php
/*--------------------
https://github.com/Jamespj/laravelformbuilder
Licensed under the GNU General Public License v3.0
Author: Jasmine Robinson (Jamespj.com)
Last Updated: 12/29/2018
----------------------*/
namespace Jamespj\FormBuilder\Middlewares;

use Closure;
use Jamespj\FormBuilder\Models\Submission;

class FormAllowSubmissionEdit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $submission_id = $request->route('my_submission');

        $user = $request->user();
        $submission = Submission::where(['user_id' => $user->id, 'id' => $submission_id])->firstOrFail();

        if (! $submission->form->allowsEdit()) {
            // this form does not allow edit
            return redirect()
                        ->route('formbuilder::my-submissions.show', $submission->id)
                        ->with('error', "Form '{$submission->form->name}' does not allow submission edit.");
        }

        return $next($request);
    }
}
