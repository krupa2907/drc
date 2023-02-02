<?php
if ($data->name == "is_your_district_identified_as_an_niti_aayog_aspirational_district") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>1.1. Is your district identified as an NITI Aayog aspirational district ?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "date_of_last_ssc_meeting") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>Date</td>';
    $output .= '<td>-</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_number_of_state_task_force_stf_meeting_conducted_during_last_30_days") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>1.2. Number of State Task force (STF) meeting conducted during last 30 days(should be conducted fortnightly)?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "date_of_last_stfi") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>1.2. Number of State Task force (STF) meeting conducted during last 30 days(should be conducted fortnightly)?</td>';
    $output .= '<td>-</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_whether_last_stf_meeting_was_conducted_under_the_chairpersonship_of_additional_chief_secretaryprincipal_secretary") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>1.3. Whether last STF meeting was conducted under the chairpersonship of
Additional Chief Secretary/Principal Secretary (Health)?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_button_besides_immunization_are_you_responsible_for_other_programmes") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>1.4. "All stakeholders participated in last STF meeting (Mention who did not<br>participate): Mission Director, National Health Mission (MD, NHM) and other<br>State-level implementing officers from health department, key government<br>departments like Urban development, Home, Defense, Women &amp; Child<br>Development including ICDS, Education, Information and Public Relations,<br>Tribal, Minority, Labor &amp; Employment, PRI, HRD, Urban local bodies, Railways,<br>Information and broadcasting, Rural development, AYUSH, partner agencies<br>like WHO, UNICEF, UNDP, BMGF, JSI, CHAI, etc., CSOs, IMA, FOGSI, IAP<br>etc.,representatives from professional bodies and NYK/NCC</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_minutes_of_last_stf_shared_with_participants_and_relevant_stakeholders") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>1.5. Minutes of last STF shared with participants and relevant stakeholders?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_state_communicated_roles__expectations_to_relevant_departments") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>1.6. State communicated roles / expectations to relevant departments?</td>';
    $output .= '<td>' . $data->val . '</td>';
     $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_number_of_state_monitors_designated_for_district_preparedness_assessment") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>1.7. Number of state monitors designated for district preparedness assessment?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_state_monitors_completed_amp_shared_district_assessment_checklist_with_state_control_room") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>1.8. State monitors completed &amp; shared district assessment checklist with state
control room?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_sensitization_of_district_level_administrators_completed") {

if ($data->val && !empty($data->val)) {
    $output .= '<tr>';
    $output .= '<td>2.1. Sensitization of district level administrators completed?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "if_planned_mention_date") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>Date</td>';
    $output .= '<td>-</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_state_workshop_for_hpv_vaccine_introduction_completed") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>2.2. State workshop for HPV vaccine introduction completed?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "if_planned_mention_date_a") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>Date</td>';
    $output .= '<td>-</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_state_media_workshop_completed") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>2.3. State media workshop completed?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "if_planned_mention_date_b") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>Date</td>';
    $output .= '<td>-</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_orientation_for_professional_bodies_completed") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>2.4. Orientation for Professional bodies (IMA,FOGSI, IAP, Med College) completed?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "if_planned_mention_date_c") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>Date</td>';
    $output .= '<td>-</td>';
    $output .= '<td>' . $data->val . '</td>'; 
    $output .= '</tr>';
}
}
if ($data->name == "text_field_orientation_of_school_authorities_completed") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>2.5. Orientation of school authorities completed?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_state_hq_has_sufficient_cold_chain_space_to_store_hpv_vaccine_in_addition_to_uip_vaccine_stock") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>3.1. State HQ has sufficient cold chain space to store HPV vaccine in addition to UIP vaccine stock</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_st_reviewe_logistic_plannin_b_districts") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>3.2. STF reviewed logistics planning by districts? </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_button_hpv_vaccine") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>3.3. Status of HPV vaccine storage capacity at State Vaccine</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_logistics") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>3.4. Logistics procurement finalised between state and district?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_state_aefi_committee_met_at_least_once_prior_to_hpv_vaccination") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>3.5. State AEFI committee met at least once prior to HPV vaccination?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "if_yes_date_of_last_state_aefi_committee_meeting:") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>Date</td>';
    $output .= '<td>-</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_did_the_state_aefi_committee_discuss_hpv_vaccine_introduction_in_a_meeting_within_the_last_3_months") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>3.6. Did the state AEFI committee discuss HPV vaccine introduction in a
meeting within the last 3 months?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_button_reporting_aefi") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>3.7. Did the state AEFI committee review the status of inclusion of medical
colleges, public and private hospitals in the AEFI reporting network and
recommend steps to ensure inclusion? </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_is_the_list_of_district_aefi_committee_meetings_held_during_the_last_three_months_discussed_in_the_state_aefi_committee") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>4.1. Is the list of district AEFI committee meetings held during the last three
months discussed in the state AEFI committee? </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_does_the_state_have_key_communication_and_demand_generation_strategies_in_place_on_hpv_vaccination") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>4.2. Does the State have key communication and demand generation strategies in
place on HPV vaccination?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_any_communication_material_printed_by_state_for_hpv_vaccination") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>4.3. Any communication material printed by State for HPV vaccination</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_has_education_department_communicated_to_district_education_department_about_hpv_campaign") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>5.1. Has education department communicated to district education department
about HPV campaign</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_if_yes_have_the_roles_and_responsibility_at_districtblockschool_also_been_communicated") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>5.2. If yes, have the roles and responsibility at district/block/school also been
communicated?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_is_there_a_plan_to_sensitize_or_review_the_status_of_preparedness_with_all_deos_at_state_level_before_hpv_campaign") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>5.3. Is there a plan to sensitize or review the status of preparedness with all
DEOs at state level before HPV campaign</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_whether_state_has_received_financial_guidelines_from_goi") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>6.1. Whether state has received financial guidelines from GoI? </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_if_yes_whether_state_has_disseminated_financial_guidelines_to_district") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>6.2. If yes - Whether state has disseminated financial guidelines to district?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_funds_disbursed_to_all_districts") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>6.3. Funds disbursed to all districts?</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_number_of_districts_conducted_in_last_30_day") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>7.1. Number of completed districts assessment checklist available with state? </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_districts_number") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>7.2. Number of districts conducted 3-4 DTFs in last 30 days  </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_number_of_districts_conducted_dfts_in_last_30_days") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>7.3. Number of districts conducted 1-2 DTFs in last 30 days </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_number_of_districts_with_no_conducted_in_last_30_day") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>7.4. Number of districts with no DTFs conducted in last 30 days </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_number_of_districts_completed_training_last_30_day") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>7.5. Number of districts completed trainings on Operational guidelines</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_number_of_districts_completed_sensitisation_of_media") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>7.6. Number of districts completed sensitization of media</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_number_of_districts_completed_cold_chain_handlers_training ") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>7.7.  Number of districts completed cold chain handlers training</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "text_field_last_30_day ") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>7.8.  Number of districts completed cold chain handlers training </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "radio_buttons_readiness_assessment_findings_apprised_to_additional_chief_secretary") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>Readiness assessment findings apprised to Additional Chief
Secretary/Principal Secretary (Health) </td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '<td>-</td>';
    $output .= '</tr>';
}
}
if ($data->name == "date_preparedness_assessment_findings_shared_with_state") {

if ($data->val && !empty($data->val)) {

    $output .= '<tr>';
    $output .= '<td>Date Assessment Findings shared </td>';
    $output .= '<td>-</td>';
    $output .= '<td>' . $data->val . '</td>';
    $output .= '</tr>';
}
}