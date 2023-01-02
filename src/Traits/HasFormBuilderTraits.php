<?php
/*--------------------
https://github.com/Jamespj/laravelformbuilder
Licensed under the GNU General Public License v3.0
Author: Jasmine Robinson (Jamespj.com)
Last Updated: 12/29/2018
----------------------*/
namespace Jamespj\FormBuilder\Traits;

use Jamespj\FormBuilder\Models\Form;
use Jamespj\FormBuilder\Models\Submission;

trait HasFormBuilderTraits
{
    /**
     * A User can have one or many forms
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function forms()
    {
    	return $this->hasMany(Form::class);
    }

    /**
     * A User can have one or many submission
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function submissions()
    {
    	return $this->hasMany(Submission::class);
    }
}
