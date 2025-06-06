<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->string('highest_edu_qualification')->nullable()->after('bio'); // Or adjust position as needed
            $table->text('past_mentorship_exp')->nullable()->after('highest_edu_qualification');
            $table->string('video_intro')->nullable()->after('past_mentorship_exp');
            $table->string('profile_pic')->nullable()->after('video_intro');
            $table->string('country')->nullable()->after('profile_pic');
            $table->string('linkedin_profile')->nullable()->after('country');
            $table->string('portfolio')->nullable()->after('linkedin_profile');
            $table->string('resume_link')->nullable()->after('portfolio');
            $table->string('project_choice')->nullable()->after('resume_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn([
                'highest_edu_qualification',
                'past_mentorship_exp',
                'video_intro',
                'profile_pic',
                'country',
                'linkedin_profile',
                'portfolio',
                'resume_link',
                'project_choice',
            ]);
        });
    }
};
