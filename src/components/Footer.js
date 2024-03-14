import React from 'react';
import {
  smallcircle,
  halfcircle,
  rocket,
  bottomline,
  darkbottomline,
  darkinnerline,
} from '../assets/images';
function Footer() {
  return (
    <div>
      <div className="image-container">
        <div className="half-circle">
          <img src={halfcircle} />
        </div>
        <div className="bottomline">
          <img src={bottomline} />
        </div>
        <div className="darkinnerline">
          <img src={darkinnerline} />
        </div>
        <div className="darkbottomline">
          <img src={darkbottomline} />
        </div>
        <div className="rocket">
          <img src={rocket} />
        </div>
        <div className="smallcircle">
          <img src={smallcircle} />
        </div>
      </div>
    </div>
  );
}

export default Footer;
