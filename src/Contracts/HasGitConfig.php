<?php

namespace NoorMaulida\GitActivity\Contracts;

interface HasGitConfig
{
    /**
     * Get the git config that belong to model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function gitUserConfig();
}