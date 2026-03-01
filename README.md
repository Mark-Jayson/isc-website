The ISC Website is designed using Material Design-inspired principles, featuring a clean layout, structured sections, and a strong visual hero banner that reflects the organization’s identity. 
The website currently includes the following pages:
-	Home
-	About
-	Community
-	Stories and Innovations
-	Events
-	Contact Us

These pages focus on establishing ISC’s identity, credibility, and visibility before expanding into advanced features like Community Portal and Innovations.
Page Descriptions

Home Page
The Home Page serves as the main landing page of the website.
It features:
• Brief introduction to the organization
• Quick navigation to other pages
• Visual elements that reflect creativity and innovation

About Page 
• Introduces ISC as an organization
• Includes history and growth timeline
• Includes mission and vision, services, and identity
• Showcases bylaws and current officers
• Documents the journey of the organization and preserves institutional memory

Events Page
• Showcases organizational activities
• Lists past and upcoming events
• Event descriptions and post-event documentation (photos and summaries)
• Future enhancement: event registration

Stories and Innovations Page
• Features industry insights from ISC alumni, partners, and resource persons

Community Page
• Members’ portal for ISC services and community activities
• With login: profile, members list, team formation
• Without login: announcements, innovators feed
• Tracks members and officers yearly
• Profiles per member/officer
• Team formation includes technology they are developing
• Community stories feature team journeys, alumni, and mentors

Contact Us Page
• Contact form that sends messages automatically to ISC email
• Includes links to social media accounts
• Tech Stack (Current Implementation Plan)


Frontend:
• HTML
• CSS only or with Bootstraps
Backend:
• PHP
Database:
• MySQL
Deployment:
Pending
Required Database Structure
1.	officers – Current and past officers
•	officer_id (PK)
•	full_name
•	position
•	academic_year
•	photo
•	status (Current / Past)
•	created_at
2.	events – Event details
•	event_id (PK)
•	title
•	description
•	event_date
•	location
•	category
•	status (Upcoming / Completed)
•	created_at
3.	event_photos – Documentation images
•	photo_id (PK)
•	event_id (FK → events.event_id)
•	image_path
•	caption
•	uploaded_at
4.	about_content – About Page content 
•	about_id (PK)
•	section_name (Overview, History, Mission, Vision, Core Values, Services)
•	content
•	updated_at
5.	members – Community members
•	member_id (PK)
•	full_name
•	email
•	course
•	year_level
•	role (Member / Officer)
•	profile_photo
•	created_at
6.	announcements – Community announcements
•	announcement_id (PK)
•	title
•	content
•	posted_at
7.	posts – Member posts in Community
•	post_id (PK)
•	content
•	created_at
8.	teams – Team formations in Community
•	team_id (PK)
•	team_name
•	members (list of member_ids)
•	created_at

