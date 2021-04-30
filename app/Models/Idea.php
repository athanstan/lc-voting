<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Idea extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Get the user that owns the Idea
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category that owns the Idea
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the status that owns the Idea
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * The votes that belong to the Idea
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function votes()
    {
        return $this->belongsToMany(User::class, 'votes');
    }

    public function getStatusClasses()
    {
        // You can also store the classes in the database
        $allStatuses = [
            'Open'          => 'bg-gray-200',
            'Considering'   => 'bg-purple-500 text-white',
            'In Progress'   => 'bg-yellow-500 text-white',
            'Implemented'   => 'bg-green-500 text-white',
            'Closed'        => 'bg-red-500 text-white',
        ];


        return $allStatuses[$this->status->name];
    }

    public function isVotedByUser(?User $user)
    {

        if(!$user){
            return false;
        }

        return Vote::where('user_id', $user->id)
            ->where('idea_id', $this->id)
            ->exists();
    }

    public function vote(User $user)
    {
        Vote::create([
            'idea_id' => $this->id,
            'user_id' => $user->id,
        ]);

    }

    public function removeVote(User $user)
    {
        Vote::where('idea_id', $this->id)
            ->where('user_id', $user->id)
            ->first()
            ->delete();

    }

}
