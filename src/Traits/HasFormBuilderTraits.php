<?php
/*--------------------
https://github.com/JamesPJ/laravelformbuilder
Licensed under the GNU General Public License v3.0
Author: Jasmine Robinson (JamesPJ.com)
Last Updated: 12/29/2018
----------------------*/
namespace JamesPJ\FormBuilder\Traits;

use JamesPJ\FormBuilder\Models\Form;
use JamesPJ\FormBuilder\Models\Submission;

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
