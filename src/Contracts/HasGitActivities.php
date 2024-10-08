<?php

namespace NoorMaulida\GitActivity\Contracts;

interface HasGitActivities
{
    /**
     * Get the git activities that belong to model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function gitUserActivities();

    /**
     * Get the git config that belong to model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function gitUserConfig();
}