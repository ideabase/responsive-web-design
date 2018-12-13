<?php

/* singles/advanced/syllabus/index */
class __TwigTemplate_6e3133ac435a5eff09c57645b662af3a3b833d3116483a1a0b9fe50180052ab2 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/advanced/syllabus/index", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<table data-table-type=\"yaml-metadata\">
  <thead>
  <tr>
  <th>layout</th>

  <th>title</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td><div>wide</div></td>

  <td><div>Syllabus - Advanced Responsive Web Design</div></td>
  </tr>
  </tbody>
</table>

<h2 id=\"kent-state-university-cci-course-40095-003-50095-003\">Kent State University CCI Course 40095-003/50095-003</h2>
<dl class=\"detail-listing detail-listing--syllabus group\">
  <div class=\"detail-list__column\">
    <dt>Instructor Name:</dt>
    <dd>Christopher Hallahan</dd>
    <dt>Instructor Email:</dt>
    <dd><a href=\"mailto:challahan@ideabasekent.com\">challahan@ideabasekent.com</a></dd>
    <dt>Terms:</dt>
    <dd>Spring 2017</dd>
    <dt>Undergrad:</dt>
    <dd>CCI 40095-002 - 20826</dd>
  </div>
  <div class=\"detail-list__column\"><br>    <dt>Grad:</dt>
    <dd>CCI 50095-002 - 20827</dd>
    <dt>Day/Time:</dt>
    <dd>Tuesdays, 3:45 - 5:00 p.m. and Thursdays, 3:00 - 5:00 p.m.</dd>
    <dt>Room:</dt>
    <dd><a href=\"http://www.ideabasekent.com/directions\">IdeaBase</a>, Downtown Kent</dd>
  </div>
</dl>

<h3 id=\"about-this-course\">About This Course</h3>
<p>Advanced Responsive Web Design takes the key principles covered in the basic Responsive Web Design course (or equivalent courses) and expands upon them within the framework of a client project.</p>
<p>The project will encompass the design and development of website in a content management system (CMS). Teams will be assigned responsibility to complete the project throughout the semester using advanced web design tools, including CSS preprocessors, templating languages and server configuration.</p>
<h4 id=\"topics\">Topics</h4>
<p>Just a few of the topics planned to be covered in the Responsive Web Design course include:</p>
<ul>
<li>Content management systems</li>
<li>Themes and design systems</li>
<li>Content planning</li>
<li>Usability and device testing</li>
<li>Style guides</li>
<li>Agile/collaborative development</li>
<li>Advanced CSS</li>
<li>Project management</li>
<li>Client interaction and training</li>
<li>Server setup</li>
</ul>
<h3 id=\"prerequisites\">Prerequisites</h3>
<p>Sophomore standing and successful completion of Responsive Web Design OR an equivalent course.  The course instructor must give approval for a student to be enrolled in the course based on completion of prerequisites and proven execution of basic HTML, CSS and responsive design techniques.</p>
<h3 id=\"subject-to-change-statement\">Subject to Change Statement</h3>
<p>The syllabus and course schedule may be subject to change. Changes will be communicated via email. It is the responsibility of students to check email messages and course announcements to stay current in the course.</p>
<h3 id=\"course-goals\">Course Goals</h3>
<p>In this course, students will:</p>
<ul>
<li>Collaborate to develop and launch a professional-level, working website and design system using responsive design principles</li>
<li>Work as a team to solve complex problems around content, user experience, design and content management systems</li>
<li>Get regular feedback on design decisions from the semester's client</li>
<li>Utilize project management and agile/Scrum-inspired skills to effectively manage time, resources and project deliverables</li>
</ul>
<h3 id=\"learning-outcomes\">Learning outcomes</h3>
<p>Most importantly, by the end of this course, students will be able to:</p>
<ul>
<li>Understand how a website or interactive property is developed from the beginning to the end, recognizing the various disciplines and roles involved</li>
<li>Have the skills to create responsive patterns and HTML/CSS/JavaScript, fill those patterns with actual working content, arrange patterns and content to meet user goals and populate those designs into a working content management system</li>
<li>Interact successfully with clients on real-world projects, taking their feedback and priorities/goals into account</li>
<li>Apply project management skills to future projects, including resource management, task/deliverable timing and team collaboration skills</li>
</ul>
<h3 id=\"course-textbook-and-materials\">Course Textbook and Materials</h3>
<p>Because this course is centered primarily around the completion of a collaborative client project, there are no required textbooks.  I will assign select readings from <a href=\"http://atomicdesign.bradfrost.com\">Brad Frost's Atomic Design book</a> and other websites as needed.</p>
<h3 id=\"class-structure\">Class Structure</h3>
<p>This will be a non-traditional class, as there won't be formal lectures or testing.  Classes will loosely run as follows:</p>
<ol>
<li>Weekly group Scrum sessions: 15 minutes each (1 in person, 1 virtual).  At the beginning of class, each team lead will provide updates from the group on what they worked on during the previous week, any problems they are having and what they expect to focus on for the next week.</li>
<li>Collaborative working time and consultation with the instructor during each class.</li>
<li>Solidifying tasks and planning for the upcoming sprint (Sprint Planning) at the end of each sprint.</li>
<li>Reviewing output from the previous sprint (Sprint Review) and evaluating the group's working process (Sprint Retrospective) every few weeks.</li>
<li>Working outside of class (at least 2 hours per week) on project deliverables.</li>
</ol>
<h3 id=\"preparing-for-class\">Preparing for Class</h3>
<p>Students are expected to come to class prepared.  This means:</p>
<ul>
<li>Readiness to fully participate in discussions, work sessions and update sessions.</li>
<li>Turning in assigned survey entries prior to each sprint.</li>
<li>Completing assigned tasks and updating team lead each week.</li>
<li>Taking the initiative to communicate and collaborate with team members, as needed.</li>
</ul>
<h3 id=\"class-roles\">Class Roles</h3>
<p>Officially, the Scrum framework (which we'll be using to organize the semester project) recognizes no specific roles or titles for development team members.  This ensures there are no barriers to collaboration - everyone is equally responsible for the end result.  </p>
<p>However, being a classroom team that does not meet 5 days a week, I am going to structure the development team into lightweight roles to help distinguish responsibilities and roles throughout the project.  </p>
<p>You may, with the permission of the instructor, choose to trade roles with another team member at the beginning of a sprint, if needed.  </p>
<h4 id=\"content-strategy-user-experience\">Content Strategy &amp; User Experience</h4>
<p><strong>3 Members (with 1 designated lead)</strong></p>
<p>The User Experience (UX) team is responsible for advocating for all functionality related to how users interact with the product and the goals and user flows that drive them.  This includes testing and getting feedback from actual end-users of the product.  They will be particularly immersed in developing and refining content, requesting content from stakeholders (by way of the account manager.   The UX team is responsible for documenting how the content must be developed to speak to the users and their needs for future content development.</p>
<p>The User Experience team must work directly with visual designers to ensure design elements are derived from real content and all design interactions make sense for the users.  They must also be in continual contact with the CMS team, ensuring the appropriate content types are built out in the CMS and the CMS architecture accurately represents the flows and needs of the end user.   Additionally the UX team is responsible for building out the final content (including media, photos, text) into the CMS for release.</p>
<h4 id=\"visual-design-and-front-end-development\">Visual Design and Front-End Development</h4>
<p><strong>3 Members (with 1 designated lead, graduate student preferred)</strong></p>
<p>The Visual Design team is responsible for the visual design patterns as well as the general design language to be utilized for the product.  While the design team may sketch and wireframe concepts in static design programs, design patterns must ultimately be developed into responsive design patterns that are in working condition.  Additionally, by the end of the product, a library of design patterns and language used in the website will be developed.  </p>
<p>The Visual Design team must collaborate closely with the UX team to ensure appropriate patterns are being designed to accomplish user goals.  Additionally, the patterns should incorporate real content that has been developed and written by the UX team.  They visual design team must also collaborate with the CMS team, ensuring their design patterns are properly integrated into the CMS and that the patterns ultimately work together to establish a cohesive design in the final website.</p>
<h4 id=\"content-management-system-and-back-end-development\">Content Management System and Back-End Development</h4>
<p><strong>3 Members (with 1 designated lead)</strong></p>
<p>Content Content Management System team is responsible for the final technical architecture that users will interact with, via the CMS.  They’ll also work closely on items that require more advanced database or dynamic functionality, including JavaScript.  This team will ultimately define the content structure and types in the CMS, building out HTML templates, CSS (SASS) and JavaScript that has been technically tested and takes performance and accessibility into account.  </p>
<p>The CMS team will work closely with the content/UX team to ensure appropriate content types are developed and that those content types are intuitive for CMS users to input content.  They’ll also work closely with the visual design team, taking completed design patterns and integrating them into the final templates via HTML, CSS and JavaScript.  The CMS team will ultimately tie everything together for the public release.</p>
<h4 id=\"non-classroom-role-account-manager\">Non-classroom role:  Account Manager</h4>
<p>The amount manager, who will work directly with the instructor (Product Owner), is responsible for managing direct communications with stakeholders and the client.  If something is needed from the client, or a meeting is to be scheduled, the account manager will ensure requests are made according to deadlines and communication flows back to the development team and instructor.  The account manager will frequently attend Scrum meetings and classroom sessions and summarize Sprint planning and retrospectives, ensuring transparency among team members.</p>
<h3 id=\"course-schedule\">Course Schedule</h3>
<p>Information on preparing for class will be posted to the <a href=\"http://www.rwdkent.com\">class website</a> and on Trello (the project planning system).</p>
<p>Because of the nature of this project, dates and priorities may change as the project progresses.</p>
<div class=\"page-break\"></div>

<h3 id=\"assignments\">Assignments</h3>
<p>Student learning will be assessed through the following types of work: in-class participation, out of class participation and periodic surveys.</p>
<p>This includes:</p>
<ul>
<li>Attending 15 minute virtual Scrum each week (attendance taken by Scrum Master)</li>
<li>Completing and logging their assigned tasks on Scrum Board at least 2 hours of project-related work per week</li>
<li>Attending each class, including 15 minute in-person Scrum</li>
<li>Completing a retrospective survey at the end of each Scrum (5 surveys)</li>
<li>Completing the peer evaluation survey at the end of the semester</li>
</ul>
<dl>
  <dt>Graduate Students</dt>
  <dd>Graduate student assignments may include a more challenging leadership role to support advanced mastery of the subject.  When working in collaboration with an undergraduate student, only the graduate student is required to complete this component of the assignment.</dd>
</dl>

<p>There are <strong>100</strong> total possible points for the semester.</p>
<div class=\"table-float\">
<h4>Retrospective Surveys</h4>


    <table>
<thead>
  <tr><th style=\"text-align:left;\">Assignment</th>
  <th style=\"text-align:left;\">Points</th>
</tr></thead>
<tbody>    <tr>
        <td>

        </td>
        <td>

        </td>
    </tr><tr>
        <td><strong>TOTAL</strong></td>
        <td><strong>25</strong></td>
    </tr>
</tbody>
</table>
</div>

<div class=\"table-float\">
<h4>Individual Assignments</h4>


    <table>
<thead>
  <tr><th style=\"text-align:left;\">Assignment</th>
  <th style=\"text-align:left;\">Points</th>
</tr></thead>
<tbody>    <tr>
        <td>

        </td>
        <td>

        </td>
    </tr><tr>
        <td><strong>TOTAL</strong></td>
        <td><strong>75</strong></td>
    </tr>
</tbody>
</table>

</div>
<div class=\"group\"></div>

<h3 id=\"attendance-policy\">Attendance Policy</h3>
<p>Attending each of the 15 classes is crucial.  I will allow <strong>two missed classes</strong> for the semester.  All subsequent absences will only be accepted for the following reasons:  sickness (with medical note only), athletic event (with coach's note), religious observation, military responsibility (with documentation) and death in the family (with documentation).  </p>
<p>Students who miss more than two classes without proper documentation will receive a 0 for their class attendance grade for the semester (10% of grade).</p>
<p>In addition to class, there will be other required meetings or out-of-class working sessions.  Attendance at these sessions (dates and times agreed upon by the group) are critical and will be reflected in the participation grade.</p>
<p>If you miss class, you are still responsible for contacting the team lead to see what was assigned that day, as well as meeting all assignment deadlines.</p>
<h3 id=\"late-submissions\">Late Submissions</h3>
<p>Late submissions in this class will not be accepted, unless the student has a university-approved excuse.  Kent State accepts the following reasons for late assignments: sickness with medical note, athletic event (with coach’s note), religious observation, military responsibility (with documentation), death in the family (with documentation).</p>
<p>Because of the nature of the course, all milestone deadlines must be met.  If deadlines are consistently missed, the student's retrospective survey grade for each milestone will be reduced accordingly.</p>
<h3 id=\"group-work\">Group Work</h3>
<p>This class uses team-based learning for part or all of the semester.  Students must agree to follow the <a href=\"../groups/policies\">Group Rules &amp; Expectations</a> throughout the course of the project.</p>
<h3 id=\"grading\">Grading</h3>
<p>Final letter grades will be assigned on the basis of the following table.  Graduate student assignments will take into account additional advanced components (described within the assignment), differing from undergraduate assignments.</p>
<table>
<thead>
<tr>
<th style=\"text-align:left\">Letter</th>
<th style=\"text-align:left\">Percentage</th>
</tr>
</thead>
<tbody>
<tr>
<td style=\"text-align:left\">A</td>
<td style=\"text-align:left\">93% or higher</td>
</tr>
<tr>
<td style=\"text-align:left\">A-</td>
<td style=\"text-align:left\">90-92%</td>
</tr>
<tr>
<td style=\"text-align:left\">B+</td>
<td style=\"text-align:left\">87-89%</td>
</tr>
<tr>
<td style=\"text-align:left\">B</td>
<td style=\"text-align:left\">83-86%</td>
</tr>
<tr>
<td style=\"text-align:left\">B-</td>
<td style=\"text-align:left\">80-82%</td>
</tr>
<tr>
<td style=\"text-align:left\">C</td>
<td style=\"text-align:left\">70-79%</td>
</tr>
<tr>
<td style=\"text-align:left\">D</td>
<td style=\"text-align:left\">60-69%</td>
</tr>
<tr>
<td style=\"text-align:left\">F</td>
<td style=\"text-align:left\">&lt; 60%</td>
</tr>
</tbody>
</table>
<h3 id=\"hardware-software\">Hardware &amp; Software</h3>
<ul>
<li>Although a laptop is not required, if you have a laptop you are encouraged to bring it to class, as it may be helpful for following along in class.  You’ll also be viewing and testing your work on multiple devices, so phones and tablets are encouraged.</li>
<li>Computers will be provided for in-class work, but you may be asked to share with another student.  Students will also be permitted to work on these computers outside of class, when needed.</li>
<li>We will be using a variety of free and paid software programs and tools.</li>
<li>Paid software may only be used on university-owned computers and will be provided at no charge.  If you would like to use paid software on your personal computer, the instructor may provide a license.  However, the license must be deactivated at the end of the semester.</li>
<li>Software programs and tools to be used in the course include: Sketch, CodeKit, MAMP Pro, Tower, Illustrator, Atom, GitHub, web browsers and Google Drive.</li>
</ul>
<div class=\"page-break\"></div>

<h3 id=\"communicating-with-the-instructor\">Communicating with the Instructor</h3>
<p>My office hours for this semester are:</p>
<ul>
<li>Tuesdays: 4:30 - 5:30 p.m.</li>
<li>Thursdays: 2:00 - 2:30 p.m.</li>
<li>By Appointment</li>
</ul>
<h4 id=\"email\">Email</h4>
<p>My email address is <a href=\"mailto:challahan@ideabasekent.com\">challahan@ideabasekent.com</a>.  Here is my email policy:</p>
<ul>
<li>I will usually respond within 24 hours during the week (Mon-Fri). Do not expect an immediate response.</li>
<li>I typically check email in the afternoons or evenings, not in the mornings.</li>
<li>I may not respond to email on weekends.</li>
</ul>
<h3 id=\"university-policies-and-procedures\">University Policies and Procedures</h3>
<p>The following policies and procedures apply to students enrolled at Kent State University. For a complete listing of university policies, please visit the Policy Register page on the Kent State University website.</p>
<h4 id=\"course-enrollment-and-withdrawal\">Course enrollment and withdrawal</h4>
<p>University policy requires all students to be officially registered in each class they are attending. Students who are not officially registered for a course by published deadlines should not be attending classes and will not receive credit or a grade for the course. Each student must confirm enrollment by checking his/her class schedule (using Student Tools in FlashFast) prior to the deadline indicated. Registration errors must be corrected prior to the deadline.</p>
<p>Every class has its own schedule of deadlines and considerations. To view the add/drop schedule and other important dates for this class, go to the Student Category / Dashboard / in  FlashLine  and choose View or Print Course Schedule and Purchase Textbooks link. To see the deadlines for this course, click on the CRN or choose the Add or drop a Course link in the Student Category / Resources Page / Courses and Registration section and click on the green clock next to the course under Registration Deadlines.</p>
<h4 id=\"incomplete-grades\">Incomplete grades</h4>
<p>The administrative mark of IN (Incomplete) may be given to students who are unable to complete the work due to extenuating circumstances. To be eligible, undergraduate students must be currently passing and have completed at least 12 weeks of the semester. Graduate students must be currently earning a C or better grade and are unable to complete the required work between the course withdrawal deadline and the end of classes. The time line shall be adjusted appropriate for summer sessions and flexibly scheduled courses.  Appropriate documentation is generally required to support the extenuating circumstance. The student must initiate the request for the Incomplete mark from the instructor, and it is the responsibility of the student to arrange to make up the incomplete work. Incomplete grades must be made up within one semester (not including summer sessions) for undergraduate students and one calendar year for graduate students. Unless the course is completed or an extension is granted, incomplete grades will automatically lapse to the grade designated on the Incomplete Mark Form at the end of one semester for undergraduate students and at the end of one year for graduate students.</p>
<h4 id=\"university-use-of-electronic-mail\">University use of electronic mail</h4>
<p>A university-assigned student email account shall be an official university means of communication with all students at Kent State University. Students are responsible for all information sent to them via their university-assigned email account. If a student chooses to forward information in their university email account, he or she is responsible for all information, including attachments, sent to any other email account. To stay current with university information, students are expected to check their official university email account and other electronic communications on a frequent and consistent basis. Recognizing that some communications may be time-critical, the university recommends that electronic communications be checked minimally twice a week.</p>
<h4 id=\"plagiarism-and-academic-integrity\">Plagiarism and academic integrity</h4>
<p>Students enrolled in the university, at all its campuses, are to perform their academic work according to standards set by faculty members, departments, schools and colleges of the university; and cheating and plagiarism constitute fraudulent misrepresentation for which no credit can be given and for which appropriate sanctions are warranted and will be applied. For more information: <a href=\"http://www.kent.edu/plagiarism\">http://www.kent.edu/plagiarism</a>.</p>
<h4 id=\"students-with-disabilities\">Students with disabilities</h4>
<p>University policy 3342-3-01.3 requires that students with disabilities be provided reasonable accommodations to ensure their equal access to course content. If you have a documented disability and require accommodations, please contact the instructor at the beginning of the semester to make arrangements for necessary classroom adjustments. Please note, you must first verify your eligibility for these through Student Accessibility Services (contact 330-672-3391 or visit <a href=\"http://www.kent.edu/sas\">www.kent.edu/sas</a> for more information on registration procedures).</p>
<h4 id=\"student-survey-of-instruction-evaluation\">Student survey of instruction evaluation</h4>
<p>It is a standard practice of Kent State University to distribute and administer to the learners a confidential and anonymous questionnaire at the completion of the course. The results will be forwarded to the Instructor only at the completion of the class and the submission of all grades. The Instructor will then incorporate the feedback received in future course offerings and in his continual improvement of the course. Please candidly and honestly describe your opinions of the strengths and weakness you experienced as a learner in the course.</p>
<h4 id=\"notice-of-my-copyright-and-intellectual-property-rights\">Notice of my copyright and intellectual property rights</h4>
<p>Any intellectual property displayed or distributed to students during this course (including but not limited to powerpoints, notes, quizzes, examinations) by the professor/lecturer/instructor remains the intellectual property of the professor/lecturer/instructor. This means that the student may not distribute, publish or provide such intellectual property to any other person or entity for any reason, commercial or otherwise, without the express written permission of the professor/lecturer/instructor.</p>
<p><a class=\"button small\" href=\"/advanced\">Return to Class</a></p>

";
    }

    public function getTemplateName()
    {
        return "singles/advanced/syllabus/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout\" %}

{% block content %}

<table data-table-type=\"yaml-metadata\">
  <thead>
  <tr>
  <th>layout</th>

  <th>title</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td><div>wide</div></td>

  <td><div>Syllabus - Advanced Responsive Web Design</div></td>
  </tr>
  </tbody>
</table>

<h2 id=\"kent-state-university-cci-course-40095-003-50095-003\">Kent State University CCI Course 40095-003/50095-003</h2>
<dl class=\"detail-listing detail-listing--syllabus group\">
  <div class=\"detail-list__column\">
    <dt>Instructor Name:</dt>
    <dd>Christopher Hallahan</dd>
    <dt>Instructor Email:</dt>
    <dd><a href=\"mailto:challahan@ideabasekent.com\">challahan@ideabasekent.com</a></dd>
    <dt>Terms:</dt>
    <dd>Spring 2017</dd>
    <dt>Undergrad:</dt>
    <dd>CCI 40095-002 - 20826</dd>
  </div>
  <div class=\"detail-list__column\"><br>    <dt>Grad:</dt>
    <dd>CCI 50095-002 - 20827</dd>
    <dt>Day/Time:</dt>
    <dd>Tuesdays, 3:45 - 5:00 p.m. and Thursdays, 3:00 - 5:00 p.m.</dd>
    <dt>Room:</dt>
    <dd><a href=\"http://www.ideabasekent.com/directions\">IdeaBase</a>, Downtown Kent</dd>
  </div>
</dl>

<h3 id=\"about-this-course\">About This Course</h3>
<p>Advanced Responsive Web Design takes the key principles covered in the basic Responsive Web Design course (or equivalent courses) and expands upon them within the framework of a client project.</p>
<p>The project will encompass the design and development of website in a content management system (CMS). Teams will be assigned responsibility to complete the project throughout the semester using advanced web design tools, including CSS preprocessors, templating languages and server configuration.</p>
<h4 id=\"topics\">Topics</h4>
<p>Just a few of the topics planned to be covered in the Responsive Web Design course include:</p>
<ul>
<li>Content management systems</li>
<li>Themes and design systems</li>
<li>Content planning</li>
<li>Usability and device testing</li>
<li>Style guides</li>
<li>Agile/collaborative development</li>
<li>Advanced CSS</li>
<li>Project management</li>
<li>Client interaction and training</li>
<li>Server setup</li>
</ul>
<h3 id=\"prerequisites\">Prerequisites</h3>
<p>Sophomore standing and successful completion of Responsive Web Design OR an equivalent course.  The course instructor must give approval for a student to be enrolled in the course based on completion of prerequisites and proven execution of basic HTML, CSS and responsive design techniques.</p>
<h3 id=\"subject-to-change-statement\">Subject to Change Statement</h3>
<p>The syllabus and course schedule may be subject to change. Changes will be communicated via email. It is the responsibility of students to check email messages and course announcements to stay current in the course.</p>
<h3 id=\"course-goals\">Course Goals</h3>
<p>In this course, students will:</p>
<ul>
<li>Collaborate to develop and launch a professional-level, working website and design system using responsive design principles</li>
<li>Work as a team to solve complex problems around content, user experience, design and content management systems</li>
<li>Get regular feedback on design decisions from the semester's client</li>
<li>Utilize project management and agile/Scrum-inspired skills to effectively manage time, resources and project deliverables</li>
</ul>
<h3 id=\"learning-outcomes\">Learning outcomes</h3>
<p>Most importantly, by the end of this course, students will be able to:</p>
<ul>
<li>Understand how a website or interactive property is developed from the beginning to the end, recognizing the various disciplines and roles involved</li>
<li>Have the skills to create responsive patterns and HTML/CSS/JavaScript, fill those patterns with actual working content, arrange patterns and content to meet user goals and populate those designs into a working content management system</li>
<li>Interact successfully with clients on real-world projects, taking their feedback and priorities/goals into account</li>
<li>Apply project management skills to future projects, including resource management, task/deliverable timing and team collaboration skills</li>
</ul>
<h3 id=\"course-textbook-and-materials\">Course Textbook and Materials</h3>
<p>Because this course is centered primarily around the completion of a collaborative client project, there are no required textbooks.  I will assign select readings from <a href=\"http://atomicdesign.bradfrost.com\">Brad Frost's Atomic Design book</a> and other websites as needed.</p>
<h3 id=\"class-structure\">Class Structure</h3>
<p>This will be a non-traditional class, as there won't be formal lectures or testing.  Classes will loosely run as follows:</p>
<ol>
<li>Weekly group Scrum sessions: 15 minutes each (1 in person, 1 virtual).  At the beginning of class, each team lead will provide updates from the group on what they worked on during the previous week, any problems they are having and what they expect to focus on for the next week.</li>
<li>Collaborative working time and consultation with the instructor during each class.</li>
<li>Solidifying tasks and planning for the upcoming sprint (Sprint Planning) at the end of each sprint.</li>
<li>Reviewing output from the previous sprint (Sprint Review) and evaluating the group's working process (Sprint Retrospective) every few weeks.</li>
<li>Working outside of class (at least 2 hours per week) on project deliverables.</li>
</ol>
<h3 id=\"preparing-for-class\">Preparing for Class</h3>
<p>Students are expected to come to class prepared.  This means:</p>
<ul>
<li>Readiness to fully participate in discussions, work sessions and update sessions.</li>
<li>Turning in assigned survey entries prior to each sprint.</li>
<li>Completing assigned tasks and updating team lead each week.</li>
<li>Taking the initiative to communicate and collaborate with team members, as needed.</li>
</ul>
<h3 id=\"class-roles\">Class Roles</h3>
<p>Officially, the Scrum framework (which we'll be using to organize the semester project) recognizes no specific roles or titles for development team members.  This ensures there are no barriers to collaboration - everyone is equally responsible for the end result.  </p>
<p>However, being a classroom team that does not meet 5 days a week, I am going to structure the development team into lightweight roles to help distinguish responsibilities and roles throughout the project.  </p>
<p>You may, with the permission of the instructor, choose to trade roles with another team member at the beginning of a sprint, if needed.  </p>
<h4 id=\"content-strategy-user-experience\">Content Strategy &amp; User Experience</h4>
<p><strong>3 Members (with 1 designated lead)</strong></p>
<p>The User Experience (UX) team is responsible for advocating for all functionality related to how users interact with the product and the goals and user flows that drive them.  This includes testing and getting feedback from actual end-users of the product.  They will be particularly immersed in developing and refining content, requesting content from stakeholders (by way of the account manager.   The UX team is responsible for documenting how the content must be developed to speak to the users and their needs for future content development.</p>
<p>The User Experience team must work directly with visual designers to ensure design elements are derived from real content and all design interactions make sense for the users.  They must also be in continual contact with the CMS team, ensuring the appropriate content types are built out in the CMS and the CMS architecture accurately represents the flows and needs of the end user.   Additionally the UX team is responsible for building out the final content (including media, photos, text) into the CMS for release.</p>
<h4 id=\"visual-design-and-front-end-development\">Visual Design and Front-End Development</h4>
<p><strong>3 Members (with 1 designated lead, graduate student preferred)</strong></p>
<p>The Visual Design team is responsible for the visual design patterns as well as the general design language to be utilized for the product.  While the design team may sketch and wireframe concepts in static design programs, design patterns must ultimately be developed into responsive design patterns that are in working condition.  Additionally, by the end of the product, a library of design patterns and language used in the website will be developed.  </p>
<p>The Visual Design team must collaborate closely with the UX team to ensure appropriate patterns are being designed to accomplish user goals.  Additionally, the patterns should incorporate real content that has been developed and written by the UX team.  They visual design team must also collaborate with the CMS team, ensuring their design patterns are properly integrated into the CMS and that the patterns ultimately work together to establish a cohesive design in the final website.</p>
<h4 id=\"content-management-system-and-back-end-development\">Content Management System and Back-End Development</h4>
<p><strong>3 Members (with 1 designated lead)</strong></p>
<p>Content Content Management System team is responsible for the final technical architecture that users will interact with, via the CMS.  They’ll also work closely on items that require more advanced database or dynamic functionality, including JavaScript.  This team will ultimately define the content structure and types in the CMS, building out HTML templates, CSS (SASS) and JavaScript that has been technically tested and takes performance and accessibility into account.  </p>
<p>The CMS team will work closely with the content/UX team to ensure appropriate content types are developed and that those content types are intuitive for CMS users to input content.  They’ll also work closely with the visual design team, taking completed design patterns and integrating them into the final templates via HTML, CSS and JavaScript.  The CMS team will ultimately tie everything together for the public release.</p>
<h4 id=\"non-classroom-role-account-manager\">Non-classroom role:  Account Manager</h4>
<p>The amount manager, who will work directly with the instructor (Product Owner), is responsible for managing direct communications with stakeholders and the client.  If something is needed from the client, or a meeting is to be scheduled, the account manager will ensure requests are made according to deadlines and communication flows back to the development team and instructor.  The account manager will frequently attend Scrum meetings and classroom sessions and summarize Sprint planning and retrospectives, ensuring transparency among team members.</p>
<h3 id=\"course-schedule\">Course Schedule</h3>
<p>Information on preparing for class will be posted to the <a href=\"http://www.rwdkent.com\">class website</a> and on Trello (the project planning system).</p>
<p>Because of the nature of this project, dates and priorities may change as the project progresses.</p>
<div class=\"page-break\"></div>

<h3 id=\"assignments\">Assignments</h3>
<p>Student learning will be assessed through the following types of work: in-class participation, out of class participation and periodic surveys.</p>
<p>This includes:</p>
<ul>
<li>Attending 15 minute virtual Scrum each week (attendance taken by Scrum Master)</li>
<li>Completing and logging their assigned tasks on Scrum Board at least 2 hours of project-related work per week</li>
<li>Attending each class, including 15 minute in-person Scrum</li>
<li>Completing a retrospective survey at the end of each Scrum (5 surveys)</li>
<li>Completing the peer evaluation survey at the end of the semester</li>
</ul>
<dl>
  <dt>Graduate Students</dt>
  <dd>Graduate student assignments may include a more challenging leadership role to support advanced mastery of the subject.  When working in collaboration with an undergraduate student, only the graduate student is required to complete this component of the assignment.</dd>
</dl>

<p>There are <strong>100</strong> total possible points for the semester.</p>
<div class=\"table-float\">
<h4>Retrospective Surveys</h4>


    <table>
<thead>
  <tr><th style=\"text-align:left;\">Assignment</th>
  <th style=\"text-align:left;\">Points</th>
</tr></thead>
<tbody>    <tr>
        <td>

        </td>
        <td>

        </td>
    </tr><tr>
        <td><strong>TOTAL</strong></td>
        <td><strong>25</strong></td>
    </tr>
</tbody>
</table>
</div>

<div class=\"table-float\">
<h4>Individual Assignments</h4>


    <table>
<thead>
  <tr><th style=\"text-align:left;\">Assignment</th>
  <th style=\"text-align:left;\">Points</th>
</tr></thead>
<tbody>    <tr>
        <td>

        </td>
        <td>

        </td>
    </tr><tr>
        <td><strong>TOTAL</strong></td>
        <td><strong>75</strong></td>
    </tr>
</tbody>
</table>

</div>
<div class=\"group\"></div>

<h3 id=\"attendance-policy\">Attendance Policy</h3>
<p>Attending each of the 15 classes is crucial.  I will allow <strong>two missed classes</strong> for the semester.  All subsequent absences will only be accepted for the following reasons:  sickness (with medical note only), athletic event (with coach's note), religious observation, military responsibility (with documentation) and death in the family (with documentation).  </p>
<p>Students who miss more than two classes without proper documentation will receive a 0 for their class attendance grade for the semester (10% of grade).</p>
<p>In addition to class, there will be other required meetings or out-of-class working sessions.  Attendance at these sessions (dates and times agreed upon by the group) are critical and will be reflected in the participation grade.</p>
<p>If you miss class, you are still responsible for contacting the team lead to see what was assigned that day, as well as meeting all assignment deadlines.</p>
<h3 id=\"late-submissions\">Late Submissions</h3>
<p>Late submissions in this class will not be accepted, unless the student has a university-approved excuse.  Kent State accepts the following reasons for late assignments: sickness with medical note, athletic event (with coach’s note), religious observation, military responsibility (with documentation), death in the family (with documentation).</p>
<p>Because of the nature of the course, all milestone deadlines must be met.  If deadlines are consistently missed, the student's retrospective survey grade for each milestone will be reduced accordingly.</p>
<h3 id=\"group-work\">Group Work</h3>
<p>This class uses team-based learning for part or all of the semester.  Students must agree to follow the <a href=\"../groups/policies\">Group Rules &amp; Expectations</a> throughout the course of the project.</p>
<h3 id=\"grading\">Grading</h3>
<p>Final letter grades will be assigned on the basis of the following table.  Graduate student assignments will take into account additional advanced components (described within the assignment), differing from undergraduate assignments.</p>
<table>
<thead>
<tr>
<th style=\"text-align:left\">Letter</th>
<th style=\"text-align:left\">Percentage</th>
</tr>
</thead>
<tbody>
<tr>
<td style=\"text-align:left\">A</td>
<td style=\"text-align:left\">93% or higher</td>
</tr>
<tr>
<td style=\"text-align:left\">A-</td>
<td style=\"text-align:left\">90-92%</td>
</tr>
<tr>
<td style=\"text-align:left\">B+</td>
<td style=\"text-align:left\">87-89%</td>
</tr>
<tr>
<td style=\"text-align:left\">B</td>
<td style=\"text-align:left\">83-86%</td>
</tr>
<tr>
<td style=\"text-align:left\">B-</td>
<td style=\"text-align:left\">80-82%</td>
</tr>
<tr>
<td style=\"text-align:left\">C</td>
<td style=\"text-align:left\">70-79%</td>
</tr>
<tr>
<td style=\"text-align:left\">D</td>
<td style=\"text-align:left\">60-69%</td>
</tr>
<tr>
<td style=\"text-align:left\">F</td>
<td style=\"text-align:left\">&lt; 60%</td>
</tr>
</tbody>
</table>
<h3 id=\"hardware-software\">Hardware &amp; Software</h3>
<ul>
<li>Although a laptop is not required, if you have a laptop you are encouraged to bring it to class, as it may be helpful for following along in class.  You’ll also be viewing and testing your work on multiple devices, so phones and tablets are encouraged.</li>
<li>Computers will be provided for in-class work, but you may be asked to share with another student.  Students will also be permitted to work on these computers outside of class, when needed.</li>
<li>We will be using a variety of free and paid software programs and tools.</li>
<li>Paid software may only be used on university-owned computers and will be provided at no charge.  If you would like to use paid software on your personal computer, the instructor may provide a license.  However, the license must be deactivated at the end of the semester.</li>
<li>Software programs and tools to be used in the course include: Sketch, CodeKit, MAMP Pro, Tower, Illustrator, Atom, GitHub, web browsers and Google Drive.</li>
</ul>
<div class=\"page-break\"></div>

<h3 id=\"communicating-with-the-instructor\">Communicating with the Instructor</h3>
<p>My office hours for this semester are:</p>
<ul>
<li>Tuesdays: 4:30 - 5:30 p.m.</li>
<li>Thursdays: 2:00 - 2:30 p.m.</li>
<li>By Appointment</li>
</ul>
<h4 id=\"email\">Email</h4>
<p>My email address is <a href=\"mailto:challahan@ideabasekent.com\">challahan@ideabasekent.com</a>.  Here is my email policy:</p>
<ul>
<li>I will usually respond within 24 hours during the week (Mon-Fri). Do not expect an immediate response.</li>
<li>I typically check email in the afternoons or evenings, not in the mornings.</li>
<li>I may not respond to email on weekends.</li>
</ul>
<h3 id=\"university-policies-and-procedures\">University Policies and Procedures</h3>
<p>The following policies and procedures apply to students enrolled at Kent State University. For a complete listing of university policies, please visit the Policy Register page on the Kent State University website.</p>
<h4 id=\"course-enrollment-and-withdrawal\">Course enrollment and withdrawal</h4>
<p>University policy requires all students to be officially registered in each class they are attending. Students who are not officially registered for a course by published deadlines should not be attending classes and will not receive credit or a grade for the course. Each student must confirm enrollment by checking his/her class schedule (using Student Tools in FlashFast) prior to the deadline indicated. Registration errors must be corrected prior to the deadline.</p>
<p>Every class has its own schedule of deadlines and considerations. To view the add/drop schedule and other important dates for this class, go to the Student Category / Dashboard / in  FlashLine  and choose View or Print Course Schedule and Purchase Textbooks link. To see the deadlines for this course, click on the CRN or choose the Add or drop a Course link in the Student Category / Resources Page / Courses and Registration section and click on the green clock next to the course under Registration Deadlines.</p>
<h4 id=\"incomplete-grades\">Incomplete grades</h4>
<p>The administrative mark of IN (Incomplete) may be given to students who are unable to complete the work due to extenuating circumstances. To be eligible, undergraduate students must be currently passing and have completed at least 12 weeks of the semester. Graduate students must be currently earning a C or better grade and are unable to complete the required work between the course withdrawal deadline and the end of classes. The time line shall be adjusted appropriate for summer sessions and flexibly scheduled courses.  Appropriate documentation is generally required to support the extenuating circumstance. The student must initiate the request for the Incomplete mark from the instructor, and it is the responsibility of the student to arrange to make up the incomplete work. Incomplete grades must be made up within one semester (not including summer sessions) for undergraduate students and one calendar year for graduate students. Unless the course is completed or an extension is granted, incomplete grades will automatically lapse to the grade designated on the Incomplete Mark Form at the end of one semester for undergraduate students and at the end of one year for graduate students.</p>
<h4 id=\"university-use-of-electronic-mail\">University use of electronic mail</h4>
<p>A university-assigned student email account shall be an official university means of communication with all students at Kent State University. Students are responsible for all information sent to them via their university-assigned email account. If a student chooses to forward information in their university email account, he or she is responsible for all information, including attachments, sent to any other email account. To stay current with university information, students are expected to check their official university email account and other electronic communications on a frequent and consistent basis. Recognizing that some communications may be time-critical, the university recommends that electronic communications be checked minimally twice a week.</p>
<h4 id=\"plagiarism-and-academic-integrity\">Plagiarism and academic integrity</h4>
<p>Students enrolled in the university, at all its campuses, are to perform their academic work according to standards set by faculty members, departments, schools and colleges of the university; and cheating and plagiarism constitute fraudulent misrepresentation for which no credit can be given and for which appropriate sanctions are warranted and will be applied. For more information: <a href=\"http://www.kent.edu/plagiarism\">http://www.kent.edu/plagiarism</a>.</p>
<h4 id=\"students-with-disabilities\">Students with disabilities</h4>
<p>University policy 3342-3-01.3 requires that students with disabilities be provided reasonable accommodations to ensure their equal access to course content. If you have a documented disability and require accommodations, please contact the instructor at the beginning of the semester to make arrangements for necessary classroom adjustments. Please note, you must first verify your eligibility for these through Student Accessibility Services (contact 330-672-3391 or visit <a href=\"http://www.kent.edu/sas\">www.kent.edu/sas</a> for more information on registration procedures).</p>
<h4 id=\"student-survey-of-instruction-evaluation\">Student survey of instruction evaluation</h4>
<p>It is a standard practice of Kent State University to distribute and administer to the learners a confidential and anonymous questionnaire at the completion of the course. The results will be forwarded to the Instructor only at the completion of the class and the submission of all grades. The Instructor will then incorporate the feedback received in future course offerings and in his continual improvement of the course. Please candidly and honestly describe your opinions of the strengths and weakness you experienced as a learner in the course.</p>
<h4 id=\"notice-of-my-copyright-and-intellectual-property-rights\">Notice of my copyright and intellectual property rights</h4>
<p>Any intellectual property displayed or distributed to students during this course (including but not limited to powerpoints, notes, quizzes, examinations) by the professor/lecturer/instructor remains the intellectual property of the professor/lecturer/instructor. This means that the student may not distribute, publish or provide such intellectual property to any other person or entity for any reason, commercial or otherwise, without the express written permission of the professor/lecturer/instructor.</p>
<p><a class=\"button small\" href=\"/advanced\">Return to Class</a></p>

{% endblock %}
", "singles/advanced/syllabus/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/advanced/syllabus/index.html");
    }
}
