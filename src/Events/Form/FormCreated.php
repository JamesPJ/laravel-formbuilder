<?php
/*--------------------
https://github.com/JamesPJ/laravelformbuilder
Licensed under the GNU General Public License v3.0
Author: Jasmine Robinson (JamesPJ.com)
Last Updated: 12/29/2018
----------------------*/
namespace JamesPJ\FormBuilder\Events\Form;

use JamesPJ\FormBuilder\Models\Form;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

class FormCreated
{
    use Queueable, SerializesModels;

    /**
     * The deleted form
     *
     * @var JamesPJ\FormBuilder\Models\Form
     */
    public $form;

    /**
     * Create a new event instance.
     *
     * @param JamesPJ\FormBuilder\Models\Form $form
     * @return void
     */
    public function __construct(Form $form)
    {
        $this->form = $form;
    }
}
