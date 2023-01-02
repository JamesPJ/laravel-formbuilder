<?php
/*--------------------
https://github.com/Jamespj/laravelformbuilder
Licensed under the GNU General Public License v3.0
Author: Jasmine Robinson (Jamespj.com)
Last Updated: 12/29/2018
----------------------*/
namespace Jamespj\FormBuilder\Events\Form;

use Jamespj\FormBuilder\Models\Form;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

class FormCreated
{
    use Queueable, SerializesModels;

    /**
     * The deleted form
     *
     * @var Jamespj\FormBuilder\Models\Form
     */
    public $form;

    /**
     * Create a new event instance.
     *
     * @param Jamespj\FormBuilder\Models\Form $form
     * @return void
     */
    public function __construct(Form $form)
    {
        $this->form = $form;
    }
}
