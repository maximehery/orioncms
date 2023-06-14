<?php

namespace App\Models;

use App\Models\HelpQuestion\HelpQuestionCategory;
use Illuminate\Database\Eloquent\{
    Model,
    Factories\HasFactory,
    Relations\BelongsToMany,
    Relations\BelongsTo
};

class HelpQuestion extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'visible' => 'boolean'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function (HelpQuestion $question) {
            $question->user_id = \Auth::id();
            $question->slug = \Str::slug($question->title);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(HelpQuestionCategory::class, 'help_question_category');
    }
}
