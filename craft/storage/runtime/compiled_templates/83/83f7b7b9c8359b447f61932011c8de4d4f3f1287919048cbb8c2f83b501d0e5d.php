<?php

/* singles/basic/syllabus/index */
class __TwigTemplate_b548871d04d2fc34ac207b123169a23c0c067f917393f44a5a9f1cbf8142593c extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/basic/syllabus/index", 1);
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

  <td><div>Syllabus - Responsive Web Design</div></td>
  </tr>
  </tbody>
</table>

<h2 id=\"kent-state-university-cci-course-40095-002-50095\">Kent State University CCI Course 40095-002/50095</h2>
<dl class=\"detail-listing detail-listing--syllabus group\">
  <div class=\"detail-list__column\">
    <dt>Instructor Name:</dt>
    <dd>Christopher Hallahan</dd>
    <dt>Instructor Email:</dt>
    <dd><a href=\"mailto:challahan@ideabasekent.com\">challahan@ideabasekent.com</a></dd>
    <dt>Terms:</dt>
    <dd>Spring 2017</dd>
    <dt>Undergrad:</dt>
    <dd>CCI ST 40095-002 - CRN 21206</dd>
  </div>
  <div class=\"detail-list__column\"><br>    <dt>Grad:</dt>
    <dd>CCI ST 50095 - CRN 21207</dd>
    <dt>Day/Time:</dt>
    <dd>Tuesdays, 5:30 p.m. - 8:15 p.m.</dd>
    <dt>Room:</dt>
    <dd><a href=\"http://www.ideabasekent.com/directions\">IdeaBase</a>, Downtown Kent</dd>
  </div>
</dl>

<h3 id=\"about-this-course\">About This Course</h3>
<p>Responsive web design isn’t just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices.  The responsive design process includes user experience, content strategy, information architecture, visual design, development, usability testing and technical testing.  Students who will succeed in this field will need to be familiar with not just one, but all of these processes, while working in a team-based environment.</p>
<p>In this course you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective.  We will explore each aspect of an agile-inspired process, during which you’ll learn each step of what it takes to build a website and ensure its functionality for its users in terms of both usability and performance.</p>
<h4 id=\"topics\">Topics</h4>
<p>Just a few of the topics planned to be covered in the Responsive Web Design course include:</p>
<ul>
<li>Atomic Design</li>
<li>Pattern Libraries and Style Guides</li>
<li>Sketching</li>
<li>User Research Techniques</li>
<li>Rapid Prototyping</li>
<li>HTML/CSS/JavaScript</li>
<li>Modern Web Design Workflows</li>
<li>Mobile Content Strategy</li>
<li>Browser Testing</li>
<li>Version Control</li>
<li>Paired and Team Coding</li>
<li>Mobile-First Design</li>
<li>Style Tiles and Web Design Techniques</li>
<li>Modern Web Layout Tools</li>
</ul>
<h3 id=\"prerequisites\">Prerequisites</h3>
<p>Sophomore standing.  This course has no other prerequisites, however you must be proficient in basic web and computer applications.  You will be expected to write HTML, CSS and light JavaScript code (familiarity with these will be helpful, but is not necessary).  You will also be working in vector-based editing tools to help prototype visual designs.  Success in this course will depend on your willingness to try learn new skills and collaborate with others from different backgrounds to solve complex problems.</p>
<h3 id=\"subject-to-change-statement\">Subject to Change Statement</h3>
<p>The syllabus and course schedule may be subject to change. Changes will be communicated via email. It is the responsibility of students to check email messages and course announcements to stay current in the course.</p>
<h3 id=\"course-goals\">Course Goals</h3>
<p>In this course, students will:</p>
<ul>
<li>Apply a modern workflow to a responsive web design, including competitive research techniques, content development, information architecture, design and development.</li>
<li>Gather and architect content for the web, with a focus on prioritizing content for use on multiple devices.</li>
<li>Rapidly prototype web design modules, developing style tiles and reusable patterns for colors, typography, layout and user interface elements.</li>
<li>Create interactive prototypes and wireframes in HTML/CSS, using standards-compliant HTML and CSS, media queries and responsive layouts.</li>
<li>Test prototypes for common performance, usability and web browser issues.</li>
<li>Use version control to create a staging server on which websites will be hosted and updated.</li>
<li>Work in a team environment, collaborating with students from a variety of disciplines.</li>
<li>Solve common web design problems both independently and as a group, through the use of online resources, books, videos and fellow students.</li>
</ul>
<h3 id=\"learning-outcomes\">Learning outcomes</h3>
<p>Most importantly, by the end of this course, students will be able to:</p>
<ul>
<li>Identify and write the most common HTML/CSS properties, with proper indentation and comments, and understand how to use these properties efficiently.</li>
<li>Organize and prioritize website content to fit information architecture best practices, including a mobile-first methodology.</li>
<li>Use media queries to create a responsive HTML/CSS/JavaScript prototype that accommodates multiple screen sizes and device types.</li>
<li>Speak intelligently about responsive web design and describe why it’s important to future clients, colleagues or employers.</li>
<li>Analyze predefined requirements and constraints that a client or employer may ask of a web designer, and creatively apply these to the solution.</li>
<li>Critique and speak intelligently about web design in terms of content, colors, typography, user interface elements and layout.</li>
<li>Coordinate a web design project and work with other team members to build deliverables along the way.</li>
<li>Understand the various roles that are essential to the web design process and appreciate the skills required for each discipline.</li>
<li>See themselves as capable and confident when working in code, even if they are not primarily developers.  Be willing to cross organizational lines and take chances.</li>
<li>Be motivated to expand their knowledge of web design by following influential web designers and businesses that are currently implementing responsive design.</li>
<li>Understand how the student and their current area of study fits into a web design role (and their role as a communicator) and expand on their current background to be able to take on future roles in interactive media.</li>
<li>Understand how HTML/CSS prototypes integrate into large, dynamic content management systems and complex organizations.</li>
<li>Develop test plans and iterate on future design and content systems after identifying usability or technical issues.</li>
<li>Identify solutions to complex design/development problems and use online resources to expand knowledge of HTML/CSS processes.</li>
</ul>
<h3 id=\"course-textbook-and-materials\">Course Textbook and Materials</h3>
<p>There are 2 required textbooks for the course.  One provides detailed examples and instructions for HTML/CSS, and the other provides more practical knowledge on web design topics:</p>
<ul>
<li><em><a href=\"http://www.amazon.com/HTML-CSS-Design-Build-Websites/dp/1118008189\">HTML and CSS: Design and Build Websites</a></em> by Jon Duckett, November 2011, Wiley. (\$18.51 on Amazon)</li>
<li><em><a href=\"http://abookapart.com/products/responsive-web-design\">Responsive Web Design</a></em> by Ethan Marcotte, Second Edition, December 2014, A Book Apart. (\$9.00/Ebook or \$18.00/Paperback + Shipping)</li>
</ul>
<p>This course will also make use of video tutorials from Lynda.com (available at no charge to students taking this course), as well as free online readings and videos.</p>
<h3 id=\"class-structure\">Class Structure</h3>
<p>This class will be held once a week and will have both a lecture/discussion and studio/lab component.  Students will be assigned readings from a variety disciplines, authors and topics, which will be discussed during the first half of class.   All students will have the opportunity to pair with a student from a different background to work on hands-on examples in class each week, as well as a long-term project that will span the semester.  Short homework assignments will be given throughout the semester in order to master key topics.</p>
<h3 id=\"preparing-for-class\">Preparing for Class</h3>
<p>Students are expected to come to class prepared.  This means:</p>
<ul>
<li>Familiarization with the required readings or videos.</li>
<li>Readiness to participate in class discussions and activities.</li>
<li>Participating in class discussions and hands-on activities.</li>
<li>Completing assignments on time and submitting them properly to GitHub each week.</li>
</ul>
<h3 id=\"course-schedule\">Course Schedule</h3>
<p>This course will be divided into two parts.  Readings, lecture notes and information on preparing for class will be posted to the <a href=\"http://www.rwdkent.com\">class website</a>.</p>
<p>Please see the <a href=\"http://www.rwdkent.com/class/schedule\">Detailed Course Schedule</a> for specific dates, times and assignments.</p>
<h4 id=\"part-1-principles-of-responsive-web-design\">Part 1: Principles of Responsive Web Design</h4>
<p>Students explore the concept of responsive web design, learn why it matters and will begin implementing simple HTML, CSS and JavaScript in the browser.  Students will read Responsive Web Design by Ethan Marcotte as part of this section and will refer to the HTML + CSS textbook frequently.</p>
<h4 id=\"part-2-responsive-design-in-practice\">Part 2:  Responsive Design in Practice</h4>
<p>Students will apply competitive research findings to a content prototype, collecting, organizing and prioritizing the most important information. Students will begin an iterative design process using CSS, where they’ll begin by mocking up design components in digital style tiles and then turning those components into reusable HTML/CSS pattern libraries. Students will learn the importance of designing a visual language for their websites using web typography, colors, user interface elements and layouts. Finally, the content and design will begin to come together in the form of prototypes.  Students will learn how prototypes are tested with usability, technical and accessibility testing.  Part 2 will end with the presentation and class critique of a website prototype and pattern library.</p>
<div class=\"page-break\"></div>

<h3 id=\"assignments\">Assignments</h3>
<p>Student learning will be assessed through three types of work: in-class participation, in-class quizzes, short assignments and a multi-stage small group/individual project.</p>
<dl>
  <dt>Graduate Students</dt>
  <dd>Graduate student assignments may include a more challenging component than undergraduate assignments to support advanced mastery of the subject.  When working in collaboration with an undergraduate student, only the graduate student is required to complete this component of the assignment.</dd>
</dl>

<p>There are <strong>100</strong> total possible points for the semester.</p>
<div class=\"table-float\">

<h4>In-Class Assignments/Quizzes</h4>



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
        <td><strong>22</strong></td>
    </tr>
</tbody>
</table>
</div>

<div class=\"table-float\">

<h4>CodePen Challenges</h4>



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
        <td><strong>28</strong></td>
    </tr>
</tbody>
</table>
</div>

<div class=\"table-float\">
<h4>Semester Project Assignments</h4>


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
        <td><strong>50</strong></td>
    </tr>
</tbody>
</table>
</div>

<h3 style=\"clear: left;\">Attendance Policy</h3>

<p>We'll be covering many topics during class, as well as working in groups on exercises to help you master web design techniques.  Therefore, attending each of the 15 classes is crucial.  I will allow <strong>two missed classes</strong> for the semester.  All subsequent absences will only be accepted for the following reasons:  sickness (with medical note only), athletic event (with coach's note), religious observation, military responsibility (with documentation) and death in the family (with documentation).  </p>
<p>Students who miss more than two classes without proper documentation will receive a 0 for their class participation grade for the semester.</p>
<p>If you miss class, you are still responsible for contacting the instructor to see what was assigned that day, as well as meeting all assignment deadlines.</p>
<p>Some assignments, such as in-class presentations, testing and quizzes, require attendance in order to receive full credit for the assignment.</p>
<h3 id=\"late-submissions\">Late Submissions</h3>
<p>The assignments deadlines are to help you manage the workload and stay on track with the course. If an assignment will be late, students must contact the instructor and explain. Kent State accepts the following reasons for late assignments: sickness with medical note, athletic event (with coach’s note), religious observation, military responsibility (with documentation), death in the family (with documentation).</p>
<p>My policy for late assignments has 3 rules:</p>
<ul>
<li>Late assignments will be accepted so long as you contact the instructor to indicate that it will be late and provide an explanation.</li>
<li>Late assignments must be submitted within 1 week of the original due date, without penalty, so long as the student meets the first rule. After 1 week the assignment will be marked as 0.</li>
<li>An additional extension may be possible in exceptional circumstances, with documentation. This requires a face-to-face conversation between the student and the instructor.</li>
</ul>
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
<li>Paid software may only be used on university-owned computers and will be provided at no charge.  If you would like to use paid software on your personal computer, you will need to purchase a license.</li>
<li>Software programs and tools to be used in the course include: Sketch, Illustrator, Atom, GitHub, web browsers and Google Drive.</li>
</ul>
<div class=\"page-break\"></div>

<h3 id=\"communicating-with-the-instructor\">Communicating with the Instructor</h3>
<p>My office hours for this semester are:</p>
<ul>
<li>Tuesdays: 4:30 - 5:30 p.m.</li>
<li>Thursdays: 4:00 - 5:00 p.m.</li>
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
<p><a class=\"button small\" href=\"/class\">Return to Class</a></p>

";
    }

    public function getTemplateName()
    {
        return "singles/basic/syllabus/index";
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

  <td><div>Syllabus - Responsive Web Design</div></td>
  </tr>
  </tbody>
</table>

<h2 id=\"kent-state-university-cci-course-40095-002-50095\">Kent State University CCI Course 40095-002/50095</h2>
<dl class=\"detail-listing detail-listing--syllabus group\">
  <div class=\"detail-list__column\">
    <dt>Instructor Name:</dt>
    <dd>Christopher Hallahan</dd>
    <dt>Instructor Email:</dt>
    <dd><a href=\"mailto:challahan@ideabasekent.com\">challahan@ideabasekent.com</a></dd>
    <dt>Terms:</dt>
    <dd>Spring 2017</dd>
    <dt>Undergrad:</dt>
    <dd>CCI ST 40095-002 - CRN 21206</dd>
  </div>
  <div class=\"detail-list__column\"><br>    <dt>Grad:</dt>
    <dd>CCI ST 50095 - CRN 21207</dd>
    <dt>Day/Time:</dt>
    <dd>Tuesdays, 5:30 p.m. - 8:15 p.m.</dd>
    <dt>Room:</dt>
    <dd><a href=\"http://www.ideabasekent.com/directions\">IdeaBase</a>, Downtown Kent</dd>
  </div>
</dl>

<h3 id=\"about-this-course\">About This Course</h3>
<p>Responsive web design isn’t just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices.  The responsive design process includes user experience, content strategy, information architecture, visual design, development, usability testing and technical testing.  Students who will succeed in this field will need to be familiar with not just one, but all of these processes, while working in a team-based environment.</p>
<p>In this course you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective.  We will explore each aspect of an agile-inspired process, during which you’ll learn each step of what it takes to build a website and ensure its functionality for its users in terms of both usability and performance.</p>
<h4 id=\"topics\">Topics</h4>
<p>Just a few of the topics planned to be covered in the Responsive Web Design course include:</p>
<ul>
<li>Atomic Design</li>
<li>Pattern Libraries and Style Guides</li>
<li>Sketching</li>
<li>User Research Techniques</li>
<li>Rapid Prototyping</li>
<li>HTML/CSS/JavaScript</li>
<li>Modern Web Design Workflows</li>
<li>Mobile Content Strategy</li>
<li>Browser Testing</li>
<li>Version Control</li>
<li>Paired and Team Coding</li>
<li>Mobile-First Design</li>
<li>Style Tiles and Web Design Techniques</li>
<li>Modern Web Layout Tools</li>
</ul>
<h3 id=\"prerequisites\">Prerequisites</h3>
<p>Sophomore standing.  This course has no other prerequisites, however you must be proficient in basic web and computer applications.  You will be expected to write HTML, CSS and light JavaScript code (familiarity with these will be helpful, but is not necessary).  You will also be working in vector-based editing tools to help prototype visual designs.  Success in this course will depend on your willingness to try learn new skills and collaborate with others from different backgrounds to solve complex problems.</p>
<h3 id=\"subject-to-change-statement\">Subject to Change Statement</h3>
<p>The syllabus and course schedule may be subject to change. Changes will be communicated via email. It is the responsibility of students to check email messages and course announcements to stay current in the course.</p>
<h3 id=\"course-goals\">Course Goals</h3>
<p>In this course, students will:</p>
<ul>
<li>Apply a modern workflow to a responsive web design, including competitive research techniques, content development, information architecture, design and development.</li>
<li>Gather and architect content for the web, with a focus on prioritizing content for use on multiple devices.</li>
<li>Rapidly prototype web design modules, developing style tiles and reusable patterns for colors, typography, layout and user interface elements.</li>
<li>Create interactive prototypes and wireframes in HTML/CSS, using standards-compliant HTML and CSS, media queries and responsive layouts.</li>
<li>Test prototypes for common performance, usability and web browser issues.</li>
<li>Use version control to create a staging server on which websites will be hosted and updated.</li>
<li>Work in a team environment, collaborating with students from a variety of disciplines.</li>
<li>Solve common web design problems both independently and as a group, through the use of online resources, books, videos and fellow students.</li>
</ul>
<h3 id=\"learning-outcomes\">Learning outcomes</h3>
<p>Most importantly, by the end of this course, students will be able to:</p>
<ul>
<li>Identify and write the most common HTML/CSS properties, with proper indentation and comments, and understand how to use these properties efficiently.</li>
<li>Organize and prioritize website content to fit information architecture best practices, including a mobile-first methodology.</li>
<li>Use media queries to create a responsive HTML/CSS/JavaScript prototype that accommodates multiple screen sizes and device types.</li>
<li>Speak intelligently about responsive web design and describe why it’s important to future clients, colleagues or employers.</li>
<li>Analyze predefined requirements and constraints that a client or employer may ask of a web designer, and creatively apply these to the solution.</li>
<li>Critique and speak intelligently about web design in terms of content, colors, typography, user interface elements and layout.</li>
<li>Coordinate a web design project and work with other team members to build deliverables along the way.</li>
<li>Understand the various roles that are essential to the web design process and appreciate the skills required for each discipline.</li>
<li>See themselves as capable and confident when working in code, even if they are not primarily developers.  Be willing to cross organizational lines and take chances.</li>
<li>Be motivated to expand their knowledge of web design by following influential web designers and businesses that are currently implementing responsive design.</li>
<li>Understand how the student and their current area of study fits into a web design role (and their role as a communicator) and expand on their current background to be able to take on future roles in interactive media.</li>
<li>Understand how HTML/CSS prototypes integrate into large, dynamic content management systems and complex organizations.</li>
<li>Develop test plans and iterate on future design and content systems after identifying usability or technical issues.</li>
<li>Identify solutions to complex design/development problems and use online resources to expand knowledge of HTML/CSS processes.</li>
</ul>
<h3 id=\"course-textbook-and-materials\">Course Textbook and Materials</h3>
<p>There are 2 required textbooks for the course.  One provides detailed examples and instructions for HTML/CSS, and the other provides more practical knowledge on web design topics:</p>
<ul>
<li><em><a href=\"http://www.amazon.com/HTML-CSS-Design-Build-Websites/dp/1118008189\">HTML and CSS: Design and Build Websites</a></em> by Jon Duckett, November 2011, Wiley. (\$18.51 on Amazon)</li>
<li><em><a href=\"http://abookapart.com/products/responsive-web-design\">Responsive Web Design</a></em> by Ethan Marcotte, Second Edition, December 2014, A Book Apart. (\$9.00/Ebook or \$18.00/Paperback + Shipping)</li>
</ul>
<p>This course will also make use of video tutorials from Lynda.com (available at no charge to students taking this course), as well as free online readings and videos.</p>
<h3 id=\"class-structure\">Class Structure</h3>
<p>This class will be held once a week and will have both a lecture/discussion and studio/lab component.  Students will be assigned readings from a variety disciplines, authors and topics, which will be discussed during the first half of class.   All students will have the opportunity to pair with a student from a different background to work on hands-on examples in class each week, as well as a long-term project that will span the semester.  Short homework assignments will be given throughout the semester in order to master key topics.</p>
<h3 id=\"preparing-for-class\">Preparing for Class</h3>
<p>Students are expected to come to class prepared.  This means:</p>
<ul>
<li>Familiarization with the required readings or videos.</li>
<li>Readiness to participate in class discussions and activities.</li>
<li>Participating in class discussions and hands-on activities.</li>
<li>Completing assignments on time and submitting them properly to GitHub each week.</li>
</ul>
<h3 id=\"course-schedule\">Course Schedule</h3>
<p>This course will be divided into two parts.  Readings, lecture notes and information on preparing for class will be posted to the <a href=\"http://www.rwdkent.com\">class website</a>.</p>
<p>Please see the <a href=\"http://www.rwdkent.com/class/schedule\">Detailed Course Schedule</a> for specific dates, times and assignments.</p>
<h4 id=\"part-1-principles-of-responsive-web-design\">Part 1: Principles of Responsive Web Design</h4>
<p>Students explore the concept of responsive web design, learn why it matters and will begin implementing simple HTML, CSS and JavaScript in the browser.  Students will read Responsive Web Design by Ethan Marcotte as part of this section and will refer to the HTML + CSS textbook frequently.</p>
<h4 id=\"part-2-responsive-design-in-practice\">Part 2:  Responsive Design in Practice</h4>
<p>Students will apply competitive research findings to a content prototype, collecting, organizing and prioritizing the most important information. Students will begin an iterative design process using CSS, where they’ll begin by mocking up design components in digital style tiles and then turning those components into reusable HTML/CSS pattern libraries. Students will learn the importance of designing a visual language for their websites using web typography, colors, user interface elements and layouts. Finally, the content and design will begin to come together in the form of prototypes.  Students will learn how prototypes are tested with usability, technical and accessibility testing.  Part 2 will end with the presentation and class critique of a website prototype and pattern library.</p>
<div class=\"page-break\"></div>

<h3 id=\"assignments\">Assignments</h3>
<p>Student learning will be assessed through three types of work: in-class participation, in-class quizzes, short assignments and a multi-stage small group/individual project.</p>
<dl>
  <dt>Graduate Students</dt>
  <dd>Graduate student assignments may include a more challenging component than undergraduate assignments to support advanced mastery of the subject.  When working in collaboration with an undergraduate student, only the graduate student is required to complete this component of the assignment.</dd>
</dl>

<p>There are <strong>100</strong> total possible points for the semester.</p>
<div class=\"table-float\">

<h4>In-Class Assignments/Quizzes</h4>



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
        <td><strong>22</strong></td>
    </tr>
</tbody>
</table>
</div>

<div class=\"table-float\">

<h4>CodePen Challenges</h4>



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
        <td><strong>28</strong></td>
    </tr>
</tbody>
</table>
</div>

<div class=\"table-float\">
<h4>Semester Project Assignments</h4>


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
        <td><strong>50</strong></td>
    </tr>
</tbody>
</table>
</div>

<h3 style=\"clear: left;\">Attendance Policy</h3>

<p>We'll be covering many topics during class, as well as working in groups on exercises to help you master web design techniques.  Therefore, attending each of the 15 classes is crucial.  I will allow <strong>two missed classes</strong> for the semester.  All subsequent absences will only be accepted for the following reasons:  sickness (with medical note only), athletic event (with coach's note), religious observation, military responsibility (with documentation) and death in the family (with documentation).  </p>
<p>Students who miss more than two classes without proper documentation will receive a 0 for their class participation grade for the semester.</p>
<p>If you miss class, you are still responsible for contacting the instructor to see what was assigned that day, as well as meeting all assignment deadlines.</p>
<p>Some assignments, such as in-class presentations, testing and quizzes, require attendance in order to receive full credit for the assignment.</p>
<h3 id=\"late-submissions\">Late Submissions</h3>
<p>The assignments deadlines are to help you manage the workload and stay on track with the course. If an assignment will be late, students must contact the instructor and explain. Kent State accepts the following reasons for late assignments: sickness with medical note, athletic event (with coach’s note), religious observation, military responsibility (with documentation), death in the family (with documentation).</p>
<p>My policy for late assignments has 3 rules:</p>
<ul>
<li>Late assignments will be accepted so long as you contact the instructor to indicate that it will be late and provide an explanation.</li>
<li>Late assignments must be submitted within 1 week of the original due date, without penalty, so long as the student meets the first rule. After 1 week the assignment will be marked as 0.</li>
<li>An additional extension may be possible in exceptional circumstances, with documentation. This requires a face-to-face conversation between the student and the instructor.</li>
</ul>
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
<li>Paid software may only be used on university-owned computers and will be provided at no charge.  If you would like to use paid software on your personal computer, you will need to purchase a license.</li>
<li>Software programs and tools to be used in the course include: Sketch, Illustrator, Atom, GitHub, web browsers and Google Drive.</li>
</ul>
<div class=\"page-break\"></div>

<h3 id=\"communicating-with-the-instructor\">Communicating with the Instructor</h3>
<p>My office hours for this semester are:</p>
<ul>
<li>Tuesdays: 4:30 - 5:30 p.m.</li>
<li>Thursdays: 4:00 - 5:00 p.m.</li>
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
<p><a class=\"button small\" href=\"/class\">Return to Class</a></p>

{% endblock %}
", "singles/basic/syllabus/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/basic/syllabus/index.html");
    }
}
