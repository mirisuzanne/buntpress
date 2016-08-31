<?php
/**
 * Tickets Email Template
 * The template for the email with the purchased tickets when using ticketing plugins (Like WooTickets)
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/tickets/email.php
 *
 * This file is being included in events/lib/tickets/Tickets.php
 *  in the function generate_tickets_email_content. That function has a $tickets
 *  array with elements that have this fields:
 *        $tickets[] = array( 'event_id',
 *                              'ticket_name'
 *                              'holder_name'
 *                              'order_id'
 *                              'ticket_id'
 *                              'security_code')
 *
 * @package TribeEventsCalendar
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php esc_html_e( 'Your tickets', 'event-tickets' ); ?></title>
	<meta name="viewport" content="width=device-width" />
	<style type="text/css">
		h1, h2, h3, h4, h5, h6 {
			color : #0a0a0e;
		}

		a, img {
			border  : 0;
			outline : 0;
		}

		#outlook a {
			padding : 0;
		}

		.ReadMsgBody, .ExternalClass {
			width : 100%
		}

		.yshortcuts, a .yshortcuts, a .yshortcuts:hover, a .yshortcuts:active, a .yshortcuts:focus {
			background-color : transparent !important;
			border           : none !important;
			color            : inherit !important;
		}

		body {
			background  : #ffffff;
			min-height  : 1000px;
			font-family : sans-serif;
			font-size   : 14px;
		}

		.appleLinks a {
			color           : #006caa;
			text-decoration : underline;
		}

		@media only screen and (max-width: 480px) {
			body, table, td, p, a, li, blockquote {
				-webkit-text-size-adjust : none !important;
			}

			body {
				width     : 100% !important;
				min-width : 100% !important;
			}

			body[yahoo] h2 {
				line-height : 120% !important;
				font-size   : 28px !important;
				margin      : 15px 0 10px 0 !important;
			}

			table.content,
			table.wrapper,
			table.inner-wrapper {
				width : 100% !important;
			}

			table.ticket-content {
				width   : 90% !important;
				padding : 20px 0 !important;
			}

			table.ticket-details {
				position       : relative;
				padding-bottom : 100px !important;
			}

			table.ticket-break {
				width : 100% !important;
			}

			td.wrapper {
				width : 100% !important;
			}

			td.ticket-content {
				width : 100% !important;
			}

			td.ticket-image img {
				max-width : 100% !important;
				width     : 100% !important;
				height    : auto !important;
			}

			td.ticket-details {
				width         : 33% !important;
				padding-right : 10px !important;
				border-top    : 1px solid #ddd !important;
			}

			td.ticket-details h6 {
				margin-top : 20px !important;
			}

			td.ticket-details.new-row {
				width      : 50% !important;
				height     : 80px !important;
				border-top : 0 !important;
				position   : absolute !important;
				bottom     : 0 !important;
				display    : block !important;
			}

			td.ticket-details.new-left-row {
				left : 0 !important;
			}

			td.ticket-details.new-right-row {
				right : 0 !important;
			}

			table.ticket-venue {
				position       : relative !important;
				width          : 100% !important;
				padding-bottom : 150px !important;
			}

			td.ticket-venue,
			td.ticket-organizer,
			td.ticket-qr {
				width      : 100% !important;
				border-top : 1px solid #ddd !important;
			}

			td.ticket-venue h6,
			td.ticket-organizer h6 {
				margin-top : 20px !important;
			}

			td.ticket-qr {
				text-align : left !important
			}

			td.ticket-qr img {
				float      : none !important;
				margin-top : 20px !important
			}

			td.ticket-organizer,
			td.ticket-qr {
				position : absolute;
				display  : block;
				left     : 0;
				bottom   : 0;
			}

			td.ticket-organizer {
				bottom : 0px;
				height : 100px !important;
			}

			td.ticket-venue-child {
				width : 50% !important;
			}

			table.venue-details {
				position : relative !important;
				width    : 100% !important;
			}

			a[href^="tel"], a[href^="sms"] {
				text-decoration : none;
				color           : black;
				pointer-events  : none;
				cursor          : default;
			}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
				text-decoration : default;
				color           : #006caa !important;
				pointer-events  : auto;
				cursor          : default;
			}
		}

		@media only screen and (max-width: 320px) {
			td.ticket-venue h6,
			td.ticket-organizer h6,
			td.ticket-details h6 {
				font-size : 12px !important;
			}
		}

		@media print {
			.ticket-break {
				page-break-before : always !important;
			}
		}

		<?php do_action( 'tribe_tickets_ticket_email_styles' );?>

	</style>
</head>
<body yahoo="fix" alink="#006caa" link="#006caa" text="#000000" bgcolor="#ffffff" style="width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0 auto; padding:20px 0 0 0; background:#ffffff; min-height:1000px;">
	<div style="margin:0; padding:0; width:100% !important; font-family: 'Helvetica Neue', Helvetica, sans-serif; font-size:14px; line-height:145%; text-align:left;">
		<center>
			<?php
			do_action( 'tribe_tickets_ticket_email_top' );
			?>

			<table class="content" align="center" width="620" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="margin:0 auto; padding:0;<?php echo $break; ?>">
				<tr>
					<td align="center" valign="top" class="wrapper" width="620">
						<table class="inner-wrapper" border="0" cellpadding="0" cellspacing="0" width="620" bgcolor="#f7f7f7" style="margin:0 auto !important; width:620px; padding:0;">
							<tr>
								<td valign="top" class="ticket-content" align="left" width="580" border="0" cellpadding="20" cellspacing="0" style="padding:20px;">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
										<tr>
											<td valign="top" align="center" width="100%" style="padding: 0 !important; margin:0 !important;">
												<h2 style="color:#0a0a0e; margin:0 0 10px 0 !important; font-family: 'Helvetica Neue', Helvetica, sans-serif; font-style:normal; font-weight:700; font-size:28px; letter-spacing:normal; text-align:left;line-height: 100%;">
													<span style="color:#0a0a0e !important">
														Thanks for your order!
													</span>
												</h2>
												<p style="text-align:left;">
													You have purchased
													<?php echo count( $tickets ); ?>
													items from
													<a href="http://buntport.com">Buntport Theater</a>...
												</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>

			<?
			$count = 0;
			$break = '';
			foreach ( $tickets as $ticket ) {
				$count ++;

				$ticket_product_id = get_post_meta( $ticket['ticket_id'], '_tribe_wooticket_product', true );
				$ticket_product = get_post( $ticket_product_id );
				$ticket_description = $ticket_product->post_excerpt;

				if ( $count == 2 ) {
					$break = 'page-break-before: always !important;';
				}

				$event      = get_post( $ticket['event_id'] );
				$header_id  = Tribe__Tickets__Tickets_Handler::instance()->get_header_image_id( $ticket['event_id'] );
				$header_img = false;
				if ( ! empty( $header_id ) ) {
					$header_img = wp_get_attachment_image_src( $header_id, 'full' );
				}

				$venue_label = '';
				$venue_name = null;

				if ( function_exists( 'tribe_get_venue_id' ) ) {
					$venue_id = tribe_get_venue_id( $event->ID );
					if ( ! empty( $venue_id ) ) {
						$venue = get_post( $venue_id );
					}

					$venue_label = tribe_get_venue_label_singular();

					$venue_name = $venue_phone = $venue_address = $venue_city = $venue_web = '';
					if ( ! empty( $venue ) ) {
						$venue_name    = $venue->post_title;
						$venue_phone   = get_post_meta( $venue_id, '_VenuePhone', true );
						$venue_address = get_post_meta( $venue_id, '_VenueAddress', true );
						$venue_city    = get_post_meta( $venue_id, '_VenueCity', true );
						$venue_web     = get_post_meta( $venue_id, '_VenueURL', true );
					}
				}

				$start_date = null;

				/**
				 * Filters whether or not the event start date should be included in the ticket email
				 *
				 * @var boolean Include start date? Defaults to false
				 * @var int Event ID
				 */
				$include_start_date = apply_filters( 'event_tickets_email_include_start_date', false, $event->ID );

				if ( $include_start_date && function_exists( 'tribe_get_start_date' ) ) {
					$start_date = tribe_get_start_date( $event, true );
				}

				if ( function_exists( 'tribe_get_organizer_ids' ) ) {
					$organizers = tribe_get_organizer_ids( $event->ID );
				}

				?>
				<hr style="border: 0;" />
				<table class="content" align="center" width="620" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="margin:0 auto; padding:0;<?php echo $break; ?>">
					<tr>
						<td align="center" valign="top" class="wrapper" width="620">
							<table class="inner-wrapper" border="0" cellpadding="0" cellspacing="0" width="620" bgcolor="#f7f7f7" style="margin:0 auto !important; width:620px; padding:0;">
								<tr>
									<td valign="top" class="ticket-content" align="left" width="580" border="0" cellpadding="20" cellspacing="0" style="padding:20px; background:#f7f7f7;">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
											<tr>
												<td valign="top" align="center" width="100%" style="padding: 0 !important; margin:0 !important;">
													<h2 style="color:#0a0a0e; margin:0 0 10px 0 !important; font-family: 'Helvetica Neue', Helvetica, sans-serif; font-style:normal; font-weight:700; font-size:28px; letter-spacing:normal; text-align:left;line-height: 100%;">
														<span style="color:#0a0a0e !important"><?php echo $event->post_title; ?></span>
													</h2>
													<?php if ( ! empty( $start_date ) ): ?>
														<h4 style="color:#0a0a0e; margin:0 !important; font-family: 'Helvetica Neue', Helvetica, sans-serif; font-style:normal; font-weight:700; font-size:15px; letter-spacing:normal; text-align:left;line-height: 100%;">
															<span style="color:#0a0a0e !important"><?php echo $start_date; ?></span>
														</h4>
													<?php endif; ?>
												</td>
											</tr>
										</table>
										<?php if ( $ticket_description ): ?>
											<table class="whiteSpace" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td valign="top" align="left" width="100%" height="30" style="height:30px; background:#f7f7f7; padding: 0 !important; margin:0 !important;">
														<div style="margin:0; height:30px;"></div>
													</td>
												</tr>
											</table>
											<table class="ticket-details" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
												<tr>
													<td class="ticket-details" valign="top" align="left" width="100" style="padding: 0; width:100%; margin:0 !important;">
														<h6 style="color:#909090 !important; margin:0 0 10px 0; font-family: 'Helvetica Neue', Helvetica, sans-serif; text-transform:uppercase; font-size:13px; font-weight:700 !important;"><?php esc_html_e( 'Ticket Description', 'event-tickets' ); ?></h6>
														<span style="color:#0a0a0e !important; font-family: 'Helvetica Neue', Helvetica, sans-serif; font-size:15px;"><?php echo  $ticket_description; ?></span>
													</td>
												</tr>
											</table>
										<?php endif; ?>
									</td>
								</tr>
							</table>
							<?php do_action( 'tribe_tickets_ticket_email_ticket_bottom', $ticket ); ?>
						</td>
					</tr>
				</table>
				<?php
			}//end foreach
			?>

			<hr style="border: 0;" />
			<table class="content" align="center" width="620" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="margin:0 auto; padding:0;<?php echo $break; ?>">
				<tr>
					<td align="center" valign="top" class="wrapper" width="620">
						<table class="inner-wrapper" border="0" cellpadding="0" cellspacing="0" width="620" bgcolor="#f7f7f7" style="margin:0 auto !important; width:620px; padding:0;">
							<tr>
								<td valign="top" class="ticket-content" align="left" width="580" border="0" cellpadding="20" cellspacing="0" style="padding:20px;">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
										<tr>
											<td valign="top" align="center" width="100%" style="padding: 0 !important; margin:0 !important;">
												<p style="text-align:left;">
												  Our box office opens a half hour before show time.
												  Seating is general admission.
												  Your reservation will be under your name at the box office,
												  so there is no need to print this email.
												  We will hold reservations until 5 minutes before curtain,
												  but we will then make them available to standby customers.
												  Call 720-946-1388 if you have any questions.
												</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>

			<?php
			do_action( 'tribe_tickets_ticket_email_bottom' );
			?>
		</center>
	</div>
</body>
</html>
