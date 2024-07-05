# IT-Job-Portal-System
Information Technology (IT)/ Computer Science (CS) Job Portal System.

* Project Title: IT Job Portal System
* Course Title: Information System Analysis & Design Sessional (CSE-3622)

* Supervised By:
    * <b>Khawja Imran Masud</b>
        -Assistant Professor, Dept. of CSE, DUET
    * <b>Md. Rajibul Islam</b>
        -Lecturer, Dept. of CSE, DUET


# Introduction
  It is an IT job portal site. Where Employee, Employer and Admin are divided into three
  sections. Employees can create resumes, search jobs, search IT firms and apply for jobs based
  on their qualifications. And employers can post their IT firm jobs and select employees. All
  will be headed by the admin who will review the information submitted by the employees and
  employers and take the decision . This IT job portal site is specially designed for Computer
  Science and Engineering students . The site has been able to get good response from a large
  number of organizations in the country who use online job advertisement facility, online CV
  and online application receiving and processing facility.


# Objectives
  1. The main objective of the it job portal system is to manage the details of employee
    registration, employer registration, search job, apply and selection.
  2. Can search job according to qualification .
  3. Students from CSE background can find their job easily .
  4. Just because CSE related job news is here, you will be free from the complications of
    different departmental news .

# Outcomes
  1. Basically this web application will help an employee to find the job of his choice with
    specific skills.
  2. Again, from this web application, the employer can find out skilled employees for his
    company.

# Requirement Analysis
  * A full setup computer
  * VS Code Editor
  * Google Chrome Brower
  * Xampp

# Data Flow Diagram

![1](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/26efbcab-f64f-42cc-8c91-0d2232e96768)

# Methodology and System flow chart
  There exits three panel in the project 1) Employee 2) Employer 3) Admin.
  Employee are users who find jobs. When employee create an account, it will go to pending list
  to approve from admin. When employee wants to apply any job the job requirement must be
  full fill with the employee qualification, if it match then employee will able to apply the job.
  Employer are company who find employee. When employer create an account, it goes to
  pending list top approve from admin. Employer can post a job with specific requirement and
  only qualified employee is able to apply on that job. Employer select their employee from
  applicant list also deselect them.
  Admin has full control of the system. Admin can approve Employee, Employer account and
  posted Job also can remove. Until approved account and job it will not show to the web site.
  Only approved account and job will show to the site.
  Until approve account employee’s will not able to apply any job and employer’s not able to
  post any job.
  
![2](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/0fbde5bc-5e48-46cc-aa31-ebe9aa5d59b4)

# Experimental Result
  There is three panel exits in the project Admin panel, Employer panel, and Employee panel.
  Admin who has full control of the system. Employer are basically companies who gives offer
  of jobs and hire employee. Employee are basically those who are finding job.

![3](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/586b1e74-1d98-486d-b0f4-e6c19c4c755a)

  Where employer & employee create account and admin, employer & employee can login.

 ![4](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/43450a81-f7be-4fec-8b50-c5bf56dde510)

   For Registration there are two option Register as Employer(Company) or as Employee(User).


   For Register a Company the following information has to provide,
 
![5](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/0dbf3dc2-7881-4e78-92ad-4079597a3540)

  For Register as User Following information has to provide,
  
![6](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/feb04f93-6597-4aa1-a361-34d8b5b68c04)

  And all information is stored at local mysql database,

![7](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/c2ab6f93-f02c-4aa8-959b-bc6424d658f0)
  
  * <b>View Company:</b>
    All approved companies list is shown,
    
![8](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/95532749-7380-4b66-9864-eb3ff34797cb)

    Clicking view, the company full details will be shown,
    
![9](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/e797bbab-6500-47ca-99c1-860dac66f0e2)

  * <b>View Users:</b>
    All proved users list will be shown,
    
![10](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/89ab26aa-3028-4a84-8657-1e4737586a0a)

    After clicking view user full details will be shown.

![11](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/f82fffb3-9aa6-4403-8cae-56fd5a2e8469)

  * <b>View Jobs:</b>
    All approved jobs list will be shown,
    
![12](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/8af52d2d-71ac-4644-b02b-9acf5a16883e)
    
    After clicking show button, the job full details will be shown
    
![13](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/cc5e738d-320c-4ea0-9896-529182ccdc1e)

  * <b>Login:</b>
  
![14](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/051f5e15-07d8-4dbc-a27f-2e36832aa0f6)

    To login email and password have to provide also have to select it is user, company or admin
    account.
    After login successfully, the desired panel will open,


  <b> 1. Admin Panel:</b>
      An admin has access to add an admin, to approve Employer or Employee account and
      approve job, also can delete Employer, Employee’s account and delete job.
      
![15](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/fee997dd-4a11-4d4f-93fa-a55cd3f4d12d)

      * <b>Add admin:</b>
      
![16](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/86fbcf83-dc20-472d-9061-5a21a23e6d3e)

      * <b>Approve Employer Account:</b>
        All pending employer account will be shown,
        
![17](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/d921207a-fd8c-46bc-a738-f69bc3f2d420)

        After clicking view, full account details will be shown. Admin checks all the
        information and approve the account.

 ![18](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/ce683234-a6cf-49c7-8d1a-a69d147387b4)

      * <b>Approve Employee Account:</b>
        All pending employee account will be shown,
       
![19](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/9ec39021-b39e-46c3-ae3e-4375b527f8f1)

        After clicking view, full account details will be shown. Admin checks all the
        information and approve the account.
      
![20](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/52ed2214-f268-4220-80ac-7bb1329f49b8)

    * <b>Approve Job:</b>
      All pending jobs will be shown,
      
![21](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/3c4272bb-e2db-47bd-a241-a0f7b7bbcd1f)

      After clicking view, full account details will be shown. Admin checks all the
      information and approve the account.

 ![22](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/4dccce55-e8d6-4a30-a8ad-52835024833a)


  <b>2. Employer (Company) Panel:</b>    
     
![23](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/838bf69e-9634-42b5-8002-9d897b46aa51)

      * <b>Post Job:</b>

![24](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/80b548dd-e395-442a-bbc7-9aa89ceca642)
![25](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/337b1b14-285f-4bab-a41a-f71e5d6656b0)

      * <b>View applicant list for a job that the company posted:</b>

![26](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/7f0a68ed-2ac1-45b5-b9fd-93320a13ecae)

         Select the job and click view button.

 ![27](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/da053d8e-fb06-49ba-85a0-7d821d4da65d)

         Click view applicant list button,
     
![28](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/078e0b54-30ae-437b-aac2-1fbfa85a6f37)

         Click view button to view full details for the applicant,
         
![29](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/2d3ed99c-c4f5-4807-b83a-ca653d12c431)

         and can select the employee.


   * <b>View Selected Employee:</b>
      First select the job and click view selected button,
     
![30](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/d08bbfeb-eaeb-45ff-9c9f-9ef74c00dfca)

      Select employee and click view to view full details,

![31](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/b0137ba5-25c2-4fb3-bc23-f118dc6214cd)

![32](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/a647acb5-79e3-4a84-8178-710ce779d7b5)

      And employee also deselect the employee.


   <b>3. Employee (User) Panel:</b>

      * <b>Update Profile Information:</b>

![33](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/e9d00a46-4e5c-4fb7-96d9-2ebfbfa12bc7)
     
![34](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/501ebc36-d1e8-4f70-a2e3-469bf2729a9e)

![35](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/e4ac39ee-0090-4772-8be2-232ab9e6f5b4)

![36](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/0220f97d-9e18-4b32-9ee3-5c1bfdc48e2b)

      * <b>Apply to a job: </b>
         Select the job and click open button,
         
![37](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/7ccf56cc-e053-4b35-bdc7-2381e5f3ab22)

![38](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/99e7c0ca-444a-44fa-ae0e-8dd2735d4d06)
![39](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/e0a0c520-7149-42d2-9234-b699ed443dfa)

         When an employee clicks the apply button then lot of things will check. Frist check the
         deadline is over or not, the job requirement is full fill or not by the employee’s profile if all
         things are satisfied then the employee’s job application will be submitted.


      * <b>View Applied Job Status:</b>

![40](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/ab596c70-4e2f-4991-ac6a-26fd7a48cc46)

         Select the job and click open button

![41](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/1f0b0d78-f596-4f9a-bd06-0e097015015d)
         
![42](https://github.com/PollobRay/IT-Job-Portal-System/assets/96225924/f40cffc1-b9cd-42d0-8069-a4a463c5a355)


# Conclusion
Online job ads can be a valuable tool for connecting real people with real jobs, in real time,
especially for university graduates, who are more likely to search for jobs on the Internet
.Basically we will try to create a site that will simplify the job search and job application
process. We will Try to help employers and employee solve many of the problems associated
with traditional recruiting methods and allow them to save their time .
